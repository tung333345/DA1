<?php
class SanPhamModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getSanPhamByDanhMuc($idDanhMuc)
    {
        try {
            $sql = "SELECT sanpham.*, danhmuc.ten_danh_muc 
                    FROM sanpham 
                    INNER JOIN danhmuc 
                    ON sanpham.id_danh_muc = danhmuc.id_danh_muc 
                    WHERE sanpham.id_danh_muc = :idDanhMuc";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idDanhMuc', $idDanhMuc, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $th) {
            echo "Lỗi: " . $th->getMessage();
        }
    }

 
} 

?>