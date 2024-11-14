<?php
class SanPhamModel{
    public $conn;
    public function __construct(){
        $this->conn=connectDB();
    }
    public function getAllSanPham(){
        try {
           $sql = "SELECT * FROM sanpham";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute();
           return $stmt->fetchAll();
        } catch (PDOException $th) {
            echo "lỗi" .$th->getMessage();
        }
    }
}


?>