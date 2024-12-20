<?php
class GioHangModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
   // Xóa chi tiết giỏ hàng sau khi đặt hàng thành công
   public function clearCart($userId)
   {
       try {
           // Lấy id_gio_hang của người dùng
           $sql = "SELECT id_gio_hang FROM giohang WHERE id_nguoi_dung = :userId"; // Không cần điều kiện trạng thái nữa
           $stmt = $this->conn->prepare($sql);
           $stmt->execute([':userId' => $userId]);
   
           // Kiểm tra nếu có giỏ hàng hợp lệ
           $gioHangId = $stmt->fetchColumn();
   
           if ($gioHangId) {
               // Xóa chi tiết giỏ hàng
               $sqlDelete = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :gioHangId";
               $deleteStmt = $this->conn->prepare($sqlDelete);
               $deleteStmt->execute([':gioHangId' => $gioHangId]);
   
               // Nếu bạn muốn xóa giỏ hàng, có thể sử dụng:
               // $sqlDeleteCart = "DELETE FROM giohang WHERE id_gio_hang = :gioHangId";
               // $deleteCartStmt = $this->conn->prepare($sqlDeleteCart);
               // $deleteCartStmt->execute([':gioHangId' => $gioHangId]);
           }
       } catch (PDOException $e) {
           echo "Lỗi khi xóa chi tiết giỏ hàng: " . $e->getMessage();
       }
   }
   

   
   

    
    public function getGioHangByUserId($userId)
    {
        $sql = "SELECT sp.id_san_pham, sp.ten_san_pham, sp.gia_san_pham, sp.hinh_anh, ctgh.so_luong
                FROM chi_tiet_gio_hang ctgh
                JOIN sanpham sp ON ctgh.id_san_pham = sp.id_san_pham
                JOIN giohang gh ON ctgh.id_gio_hang = gh.id_gio_hang
                WHERE gh.id_nguoi_dung = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function addToCart($userId, $idSanPham, $quantity)
    {
        // Kiểm tra giỏ hàng của người dùng
        $gioHangId = $this->getGioHangIdByUserId($userId);
        if (!$gioHangId) {
            $gioHangId = $this->createGioHang($userId);
        }

        // Thêm hoặc cập nhật sản phẩm trong chi tiết giỏ hàng
        $sql = "INSERT INTO chi_tiet_gio_hang (id_gio_hang, id_san_pham, so_luong)
                VALUES (:gioHangId, :idSanPham, :quantity)
                ON DUPLICATE KEY UPDATE so_luong = so_luong + :quantity";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
        $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function removeFromCart($userId, $idSanPham)
    {
        $gioHangId = $this->getGioHangIdByUserId($userId);
        if ($gioHangId) {
            $sql = "DELETE FROM chi_tiet_gio_hang WHERE id_gio_hang = :gioHangId AND id_san_pham = :idSanPham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
            $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
    private function getGioHangIdByUserId($userId)
    {
        $sql = "SELECT id_gio_hang FROM giohang WHERE id_nguoi_dung = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    private function createGioHang($userId)
    {
        $sql = "INSERT INTO giohang (id_nguoi_dung) VALUES (:userId)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }
    public function getSoLuongTon($idSanPham)
    {
        $sql = "SELECT so_luong FROM sanpham WHERE id_san_pham = :idSanPham";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['so_luong'] ?? 0;
    }
    public function updateSoLuongSanPham($userId, $idSanPham, $soLuong)
    {
        $gioHangId = $this->getGioHangIdByUserId($userId);

        if ($gioHangId) {
            $sql = "UPDATE chi_tiet_gio_hang 
                    SET so_luong = :soLuong 
                    WHERE id_gio_hang = :gioHangId AND id_san_pham = :idSanPham";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':gioHangId', $gioHangId, PDO::PARAM_INT);
            $stmt->bindParam(':idSanPham', $idSanPham, PDO::PARAM_INT);
            $stmt->bindParam(':soLuong', $soLuong, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
    public function createOrder($userId, $name, $email, $phone, $address, $total, $paymentMethod, $trangThaiId, $ghiChu = null)
    {
        try {
            // Tạo mã đơn hàng (ví dụ sử dụng timestamp)
            $orderCode = 'DH' . time();

            // Câu lệnh SQL để chèn dữ liệu vào bảng `don_hangs`
            $sql = "INSERT INTO don_hangs (
                        ma_don_hang, 
                        tai_khoan_id, 
                        ten_nguoi_nhan, 
                        email_nguoi_nhan, 
                        sdt_nguoi_nhan, 
                        dia_chi_nguoi_nhan, 
                        ngay_dat, 
                        tong_tien, 
                        phuong_thuc_thanh_toan_id, 
                        trang_thai_id, 
                        ghi_chu
                    ) VALUES (
                        :ma_don_hang, 
                        :tai_khoan_id, 
                        :ten_nguoi_nhan, 
                        :email_nguoi_nhan, 
                        :sdt_nguoi_nhan, 
                        :dia_chi_nguoi_nhan, 
                        NOW(), 
                        :tong_tien, 
                        :phuong_thuc_thanh_toan_id, 
                        :trang_thai_id, 
                        :ghi_chu
                    )";

            // Chuẩn bị câu lệnh SQL
            $stmt = $this->conn->prepare($sql);

            // Gán giá trị cho các tham số
            $stmt->bindParam(':ma_don_hang', $orderCode, PDO::PARAM_STR);
            $stmt->bindParam(':tai_khoan_id', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':ten_nguoi_nhan', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email_nguoi_nhan', $email, PDO::PARAM_STR);
            $stmt->bindParam(':sdt_nguoi_nhan', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':dia_chi_nguoi_nhan', $address, PDO::PARAM_STR);
            $stmt->bindParam(':tong_tien', $total, PDO::PARAM_STR);
            $stmt->bindParam(':phuong_thuc_thanh_toan_id', $paymentMethod, PDO::PARAM_INT);
            $stmt->bindParam(':trang_thai_id', $trangThaiId, PDO::PARAM_INT);

            // Gán giá trị cho trường ghi chú (nếu có)
            if ($ghiChu !== null) {
                $stmt->bindParam(':ghi_chu', $ghiChu, PDO::PARAM_STR);
            } else {
                $stmt->bindValue(':ghi_chu', null, PDO::PARAM_NULL);
            }

            // Thực thi câu lệnh
            $stmt->execute();

            // Trả về ID của đơn hàng vừa tạo
            return $this->conn->lastInsertId();

        } catch (PDOException $e) {
            // Xử lý lỗi
            throw new Exception("Lỗi khi tạo đơn hàng: " . $e->getMessage());
        }
    }




}
?>