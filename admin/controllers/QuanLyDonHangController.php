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
            deleteSessionError();

        }else{
            header("location:?act=don-hang");
            exit();
        }
    }
        // echo "Chi tiết đơn hàng!";


    // public function createSanPham(){
    //     $listDanhMuc= $this->modelDanhMuc->getAll();
    //     if(!isset($_SESSION['form_submitted'])) {
    //         unset($_SESSION['errors']);
    //     } else {
    //         unset($_SESSION['form_submitted']);
    //     }
        
    //     require_once 'views/sanpham/addSanPham.php';

    // }
    // public function postAddSanPham(){
    //     if($_SERVER['REQUEST_METHOD'] == "POST"  ){
    //         // lấy ra dữ liệu
    //         $ten_san_pham = $_POST['ten_san_pham'];
    //         $gia_san_pham = $_POST['gia_san_pham'];
    //         $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
    //         $so_luong = $_POST['so_luong'];
    //         $ngay_nhap = $_POST['ngay_nhap'];
    //         $id_danh_muc = $_POST['id_danh_muc'];
    //         $trang_thai = $_POST['trang_thai'];
    //         $mo_ta = $_POST['mo_ta'];
    //         $hinh_anh = $_FILES['hinh_anh'];
    //         $file_thumb = uploadFile($hinh_anh,'./uploads/');
    //         // mảng hình ảnh 
    //         $img_array = $_FILES['img_array'];



    //     //   validate
    //     $errors = [];
    //     if (empty($ten_san_pham)) {
    //         $errors['ten_san_pham']="tên sản phẩm là bắt buộc";
    //     }
    //     if (empty($gia_san_pham)) {
    //         $errors['gia_san_pham']="giá sản phẩm là bắt buộc";
    //     }
    //     if (empty($gia_khuyen_mai)) {
    //         $errors['gia_khuyen_mai']="giá khuyến mãi sản phẩm là bắt buộc";
    //     }
    //     if (empty($so_luong)) {
    //         $errors['so_luong']="số lượng sản phẩm là bắt buộc";
    //     }
    //     if (empty($ngay_nhap)) {
    //         $errors['ngay_nhap']="Ngày nhập sản phẩm là bắt buộc";
    //     }
    //     if (empty($id_danh_muc)) {
    //         $errors['id_danh_muc']="id danh mục là bắt buộc";
    //     }
    //     if(empty($trang_thai)){
    //         $errors['trang_thai']="trạng thái là bắt buộc";
    //        }
        
    //     // thêm dữ liệu
    //     if(empty($errors)){
    //         // không có lỗi thì thêm dữ liệu
    //      $san_pham_id = $this->modelSanPham->insertSanPham($ten_san_pham,$gia_san_pham,$gia_khuyen_mai,$so_luong,$ngay_nhap,$id_danh_muc,$trang_thai,$mo_ta,$file_thumb);
    //     // xử lý thêm album ảnh sản phẩm
       
    //     if(!empty($img_array['name'])){
    //         foreach ($img_array['name'] as $key=>$value ){
    //             $file=[
    //                 'name'=> $img_array['name'][$key],
    //                 'type'=> $img_array['type'][$key],
    //                 'tmp_name'=> $img_array['tmp_name'][$key],
    //                 'error'=> $img_array['error'][$key],
    //                 'size'=> $img_array['size'][$key]                
    //             ];
    //             $link_hinh_anh = uploadFile($file,'./upload/');

    //             $this->modelSanPham->insertAlbumAnhSanPham($san_pham_id,$link_hinh_anh);
    //         }
    //     }
    //      unset($_SESSION['errors']);
    //      header("location:?act=san-pham");
    //         exit();
           
    //      }
       
    //     else{
    //         $_SESSION['errors'] = $errors;
    //         $_SESSION['form_submitted'] = true;
    //         header("location:?act=form-add-san-pham");
    //         exit();
    //     }
        
    // }
    // }
    // public function editSanPham($san_pham_id) {
    //     $sanPham = $this->modelSanPham->getSanPhamById($san_pham_id);
    //     $listDanhMuc = $this->modelDanhMuc->getAll();
    //     require_once 'views/sanpham/editSanPham.php';
    // }
    // public function updateSanPham() {
    //     if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //         $san_pham_id = $_POST['san_pham_id'];
    //         $ten_san_pham = $_POST['ten_san_pham'];
    //         $gia_san_pham = $_POST['gia_san_pham'];
    //         $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
    //         $so_luong = $_POST['so_luong'];
    //         $id_danh_muc = $_POST['id_danh_muc'];
    //         $trang_thai = $_POST['trang_thai'];
    //         $mo_ta = $_POST['mo_ta'];
            
    //         // Xử lý cập nhật hình ảnh
    //         $hinh_anh = $_FILES['hinh_anh'];
    //         if ($hinh_anh['error'] == 0) {
    //             $file_thumb = uploadFile($hinh_anh, './uploads/');
    //             if ($file_thumb) {
    //                 deleteFile($_POST['current_hinh_anh']);
    //             }
    //         } else {
    //             $file_thumb = $_POST['current_hinh_anh'];
    //         }

    //         $this->modelSanPham->updateSanPham($san_pham_id, $ten_san_pham, $gia_san_pham, $gia_khuyen_mai, $so_luong, $id_danh_muc, $trang_thai, $mo_ta, $file_thumb);

    //         header("location:?act=san-pham");
    //         exit();
    //     }
    // }
    // public function destroy() {
    //     if (isset($_GET['san_pham_id'])) {
    //         $san_pham_id = $_GET['san_pham_id'];
    //         $this->modelSanPham->deleteSanPham($san_pham_id);
    //         header("location:?act=san-pham");
    //         exit();
    //     }
    // }
}

?>