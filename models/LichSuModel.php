!
<?php
class LichSuModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getDonHangFromUser($tai_khoan_id)
    {
        try {
            $sql = "SELECT dh.*, nguoidung.ten_dang_nhap, nguoidung.email
            FROM don_hangs dh
            LEFT JOIN nguoidung  ON dh.tai_khoan_id = nguoidung.ma_nguoi_dung
            WHERE dh.tai_khoan_id = :tai_khoan_id
            ";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':tai_khoan_id' => $tai_khoan_id
            ]);

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            

            if (empty($result)) {
                return [];
            }

            // print_r($result);
          


            return $result;
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
            return [];
        }
    }


    public function getTrangThaiDonHang()
    {
        try {
            $sql = "SELECT * 
                    FROM trang_thai_don_hangs";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getPhuongThucThanhToan()
    {
        try {
            $sql = "SELECT *  FROM phuong_thuc_thanh_toans";



            $stmt = $this->conn->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getDonHangById($id)
    {
        try {
            $sql = "SELECT * FROM don_hangs WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getChiTietDonHangByDonHangId($donhangid)
    {
        try {
            $sql = "SELECT
                    chi_tiet_don_hangs.*,
                    sanpham.ten_san_pham,
                    sanpham.hinh_anh,
                    don_hangs.ma_don_hang,
                    don_hangs.tong_tien
                FROM chi_tiet_don_hangs
                JOIN sanpham ON chi_tiet_don_hangs.san_pham_id = sanpham.id_san_pham
                JOIN don_hangs ON chi_tiet_don_hangs.don_hang_id = don_hangs.id
                WHERE chi_tiet_don_hangs.don_hang_id = :don_hang_id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute(['don_hang_id' => $donhangid]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function themChiTietDonHang($donHangId, $sanPhamId, $donGia, $soLuong, $thanhTien)
    {
        try {
            // Câu lệnh SQL để insert vào bảng chi_tiet_don_hangs
            $sql = "INSERT INTO chi_tiet_don_hangs (don_hang_id, san_pham_id, don_gia, so_luong, thanh_tien)
                    VALUES (:don_hang_id, :san_pham_id, :don_gia, :so_luong, :thanh_tien)";

            // Chuẩn bị câu lệnh
            $stmt = $this->conn->prepare($sql);

            // Bind các giá trị vào câu lệnh SQL
            $stmt->bindParam(':don_hang_id', $donHangId);
            $stmt->bindParam(':san_pham_id', $sanPhamId);
            $stmt->bindParam(':don_gia', $donGia);
            $stmt->bindParam(':so_luong', $soLuong);
            $stmt->bindParam(':thanh_tien', $thanhTien);

            // Thực thi câu lệnh
            $stmt->execute();

            return true;  // Trả về true khi thực thi thành công
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;  // Trả về false khi có lỗi
        }
    }

    public function updateTrangThaiDonHang($donhangid, $trangthaiid)
    {
        try {
            $sql = "UPDATE don_hangs SET trang_thai_id = :trang_thai_id    WHERE id = :id ";



            $stmt = $this->conn->prepare($sql);

            $stmt->execute(['id:' => $donhangid], ['trang_thai_id:' => $trangthaiid]);
            return true;
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }





}

?>