<?php

class QuanLyDonHangController{
    public $modelDonHang;
   
    public function __construct(){
    $this -> modelDonHang = new QuanLyDonHangModel();
       
    }
    public function danhSachDonHang(){
        // lấy ra dữ liệu danh mục
        $listDonHang = $this->modelDonHang-> getAllDonHang ();
        // đưa dữ liệu ra view
        require_once "views/donhang/listDonHang.php";
        // require_once "./admin/views/donhang/listDonHang.php";
    }
    public function detailDonHang(){
        $don_hang_id = $_GET['id_don_hang'];

        // lất thông tin đơn hàng ở bảng đơn_hangs

        $donhang = $this->modelDonHang-> getDetailDonHang($don_hang_id);
        // lấy danh sách sản phẩm đã đặt của đơn hàng ở bảng Chair_tiet_don_háng
        $sanPhamDonHang = $this->modelDonHang->getListSpDonHang($don_hang_id);
        // echo "Chi tiết đơn hàng!";
                require_once "views/donhang/detailDonHang.php";

        // require_once __DIR__ . '/views/donhang/detailDonHang.php';
    }
    public function formEditDonHang(){
        $id = $_GET['id_don_hang'];

        $donhang = $this->modelDonHang-> getDetailDonHang($id);
        
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();
        if($donhang){
            require_once "./views/donhang/editDonHang.php";
            // deleteSessionError();

        }else{
            header("location:?act=don-hang");
            exit();
        }
    }
    public function postEditDonHang() {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $don_hang_id = $_POST['don_hang_id']?? '';

                $ten_nguoi_nhan = $_POST['ten_nguoi_nhan']?? '';
                $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan']?? '';
                $email_nguoi_nhan = $_POST['email_nguoi_nhan']?? '';
                $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan']?? '';
                $ghi_chu = $_POST['ghi_chu']?? '';
                $trang_thai_id = $_POST['trang_thai_id']?? null;
                //   validate
        $errors = [];
        if (empty($ten_nguoi_nhan)) {
            $errors['ten_nguoi_nhan']="tên người nhận là bắt buộc";
        }
         if (empty($sdt_nguoi_nhan)) {
            $errors['sdt_nguoi_nhan']="số điện thoại người nhận là bắt buộc";
        }
        if (empty($email_nguoi_nhan)) {
            $errors['email_nguoi_nhan']="email người nhận là bắt buộc";
        }
        if (empty($dia_chi_nguoi_nhan)) {
            $errors['dia_chi_nguoi_nhan']="địa chỉ người nhận là bắt buộc";
        }
        // $trang_thai_id = $_POST['trang_thai_id'] ?? null;
        if (empty($trang_thai_id)) {
            $errors['trang_thai_id']="trang thái là bắt buộc";
        }
       
        $_SESSION['errors'] = $errors;
        // var_dump($errors);die;
       
        if(empty($errors)){
            // không có lỗi thì sua dữ liệu
            $don =  $this->modelDonHang->updateDonHang($don_hang_id,$ten_nguoi_nhan,$sdt_nguoi_nhan,$email_nguoi_nhan,$dia_chi_nguoi_nhan,$ghi_chu,$trang_thai_id);
    //  var_dump($don);die;
         header("location:?act=don-hang");
         exit();
        }
        else{
          
            $_SESSION['flash'] = true;
            header("location:?act=form-sua-don-hangs&id_don_hang=".$don_hang_id);
            exit();
        }
            }
        }
}
?>