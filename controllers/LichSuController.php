<?php

class LichSuController { public $LichSuModel;
    public $modelTaiKhoan;
    public $modelDonHang;
    public function __construct() {
        $this->LichSuModel = new LichSuModel();
        $this->modelTaiKhoan = new User();
        $this->modelDonHang = new LichSuModel();
    }
public function lichSuMuaHang (){
if (isset($_SESSION['user_client'])){
    //lay ra thon tin tai khoan dang nhap
    $user = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);
    $tai_khoan_id = $user['id'];
    //lấy danh sách strangj thái đơn hàng
    $arrTrangThaiDonHang = $this->modelDonHang->getTrangThaiDonHang();
    $trangThaiDonHang = array_column($arrTrangThaiDonHang, 'ten_trang_thai', 'id');
    //lấy danh sách phuong thuc thanh toán
    $arrPhuongThucThanhToan = $this->modelDonHang->getPhuongThucThanhToan();
    $phuongThucThanhToan = array_column($arrPhuongThucThanhToan, 'ten_phuong_thuc', 'id');

    //láy dnah sách tất cả đơn hàng của tài khoản


    $donhang =  $this->modelDonHang->getDonHangFromUser($tai_khoan_id);
   require_once "./views/lichSuMuaHang.php";
}else{
    var_dump('Bạn chưa đang nhập');
    die;
}
}
public function chiTietMuaHang (){
    if (isset($_SESSION['user_client'])){
        //lay ra thon tin tai khoan dang nhap
   $user = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);
   $tai_khoan_id = $user['id'];
   //lay id don hang truyen tu ủl
   $donhangid =$_GET['id'];
   // kiem tra don hang
   $arrTrangThaiDonHang = $this->modelDonHang->getTrangThaiDonHang();
    $trangThaiDonHang = array_column($arrTrangThaiDonHang, 'ten_trang_thai', 'id');
    //lấy danh sách phuong thuc thanh toán
    $arrPhuongThucThanhToan = $this->modelDonHang->getPhuongThucThanhToan();
    $phuongThucThanhToan = array_column($arrPhuongThucThanhToan, 'ten_phuong_thuc', 'id');
     //lay thong tin don hang theo id
    $donhang = $this->modelDonHang->getDonHangById($donhangid);

    //lay thong tin sp cua don hang trong bang chi tiet don hang
    $chiTietDonhang = $this->modelDonHang->getChiTietDonHangByDonHangId($donhangid);
    if($donhang['tai_khoan_id'] != $tai_khoan_id){
        echo "bạn không có quyền truy cập đon hàng này";
        exit;
    }
    require_once "./views/chiTietMuaHang.php";
   }else{
       var_dump('Bạn chưa đang nhập');
       die;
   }
   } 

public function huyDonHang (){
    if (isset($_SESSION['user_client'])){
         //lay ra thon tin tai khoan dang nhap
    $user = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);
    $tai_khoan_id = $user['id'];
    //lay id don hang truyen tu ủl
    $donhangid =$_GET['id'];
    // kiem tra don hang
    $donhang = $this->modelDonHang->getDonHangById($donhangid);
    if($donhang['tai_khoan_id'] != $tai_khoan_id){
        echo "bạn không có quyền hủy đon hàng này ";
        exit;
    }
    if($donhang['trang_thai_id'] != 1){
        echo "chỉ đon hàng ở trạng thái 'chưa xác nhận' mới có thể hủy ";
        exit;
        //huy don hang
        $this->modelDonHang->updateTrangThaiDonHang($donhangid,11);
        header('Location: ?act=lich-su-mua-hang');
        exit();

    }else{
        var_dump('Bạn chưa đang nhập');
        die;
    }
    } 
}



   
    
    
}
?>
