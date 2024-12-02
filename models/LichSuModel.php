!<?php
class LichSuModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getDonHangFromUser($taikhoanid)
    {
        try {
            $sql = "SELECT * 
                    FROM don_hangs
                  
                    WHERE tai_khoan_id = :tai_khoan_id";
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute([
                ':tai_khoan_id'=> $taikhoanid
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getTrangThaiDonHang()
    {
        try {
            $sql = "SELECT * 
                    FROM trang_thai_don_hangs";
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute(  );
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getPhuongThucThanhToan()
    {
        try {
            $sql = "SELECT *  FROM phuong_thuc_thanh_toans" ;
                   
                  
                   
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getDonHangById($donhangid)
    {
        try {
            $sql = "SELECT *  FROM don_hangs WHERE id = :id " ;
                   
                  
                   
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute(['id:'=> $donhangid]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function getChiTietDonHangByDonHangId($donhangid)
    {
        try {
            $sql = "SELECT
            chi_tiet_don_hangs.*
            sanpham.ten_san_pham
            sanpham.hinh_anh

              FROM  chi_tiet_don_hangs
              JOIN 
              sanpham ON  chi_tiet_don_hangs.san_pham_id=sanpham.id
               WHERE  chi_tiet_don_hangs.don_hang_id = :don_hang_id" ;
                   
                  
                   
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute(['don_hang_id:'=> $donhangid]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }
    public function updateTrangThaiDonHang($donhangid,$trangthaiid)
    {
        try {
            $sql = "UPDATE don_hangs SET trang_thai_id = :trang_thai_id    WHERE id = :id " ;
                   
                  
                   
            $stmt = $this->conn->prepare($sql);
          
            $stmt->execute(['id:'=> $donhangid],['trang_thai_id:'=> $trangthaiid]);
            return true;
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }

   
    
   

}

?>