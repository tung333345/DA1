<?php
    class  QuanLyDonHangModel {
        public $conn;
        function __construct(){
            $this->conn=connectDB();
        }
        // quan ly dơn hang
        public function getAllDonHang(){
            try {
               $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai 
               FROM don_hangs
               INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id';
               $stmt = $this->conn->prepare($sql);
               $stmt->execute();
               return $stmt->fetchAll();
            } catch (PDOException $th) {
                echo "lỗi" .$th->getMessage();
            }
        }
        public function getAlltrangThaiDonHang(){
            try {
               $sql = 'SELECT *  FROM trang_thai_don_hangs ';
               $stmt = $this->conn->prepare($sql);
               $stmt->execute();
               return $stmt->fetchAll();
            } catch (PDOException $th) {
                echo "lỗi" .$th->getMessage();
            }}
        
         // lấy thông tin chi tiết
        public function getDetailDonHang($id){
           try {
            $sql = 'SELECT don_hangs.*, 
            trang_thai_don_hangs.ten_trang_thai,
            tai_khoans.ho_ten, tai_khoans.email, tai_khoans.so_dien_thoai,
            phuong_thuc_thanh_toans.ten_phuong_thuc
            FROM don_hangs
            INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id 
            INNER JOIN tai_khoans ON don_hangs.tai_khoan_id = tai_khoans.id 
            INNER JOIN phuong_thuc_thanh_toans ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id
            WHERE don_hangs.id = :id';
    
           
            $stmt=$this->conn->prepare($sql);
            
            $stmt->execute([':id'=>$id]);
            return $stmt->fetch();
           } catch (PDOException $th) {
            echo "lỗi" .$th->getMessage();
           }
            
        }

        public function getListSpDonHang($id){
            try {
             $sql = 'SELECT chi_tiet_don_hangs.* , sanpham.ten_san_pham
             FROM chi_tiet_don_hangs  
            INNER JOIN sanpham ON chi_tiet_don_hangs.don_hang_id = id
             WHERE chi_tiet_don_hangs.don_hang_id = :id';
            
             $stmt=$this->conn->prepare($sql);
             
             $stmt->execute([':id'=>$id]);
             return $stmt->fetchAll();
            } catch (PDOException $th) {
             echo "lỗi" .$th->getMessage();
            }
             
         }
    

        public function updateDonHang($id,$ten_nguoi_nhan,$sdt_nguoi_nhan,$email_nguoi_nhan,$dia_chi_nguoi_nhan,$ghi_chu,$trang_thai_id){
            try {
                $sql = "UPDATE don_hangs set
                 ten_nguoi_nhan=:ten_nguoi_nhan ,
                 sdt_nguoi_nhan=:sdt_nguoi_nhan ,
                email_nguoi_nhan=:email_nguoi_nhan ,
                dia_chi_nguoi_nhan=:dia_chi_nguoi_nhan ,
                ghi_chu=:ghi_chu ,
                trang_thai_id=:trang_thai_id ,

                 where id=:id";
                $stmt = $this->conn->prepare($sql);
                var_dump($stmt);die;
                $stmt->bindParam(':ten_nguoi_nhan',$ten_nguoi_nhan);
                $stmt->bindParam(':sdt_nguoi_nhan',$sdt_nguoi_nhan);
                $stmt->bindParam(':email_nguoi_nhan',$email_nguoi_nhan);
                $stmt->bindParam(':dia_chi_nguoi_nhan',$dia_chi_nguoi_nhan);
                $stmt->bindParam(':ghi_chu',$ghi_chu);
                $stmt->bindParam(':id',$trang_thai_id);
               
                $stmt->execute();
                return true;
             } catch (PDOException $th) {
                 echo "lỗi" .$th->getMessage();
             }
        }
        // húy kết nối csdl
        // function __destruct(){
        //     $this->conn=null;
        // }
    }

?>