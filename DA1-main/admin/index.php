<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/QuanLyDonHangController.php';


// Require toàn bộ file Models
require_once "models/DanhMucModel.php";
require_once "models/QuanLyDonHangModel.php";
// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act){
    // Dashboards
    '/'                 => (new DashboardController())->index(),
    // quản lý danh mục sản phẩm
    'danh-mucs'         => (new DanhMucController())->index(),
    'form-add-danh-muc' => (new DanhMucController())->create(),
    'them-danh-muc'     => (new DanhMucController())->store(),
    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc'      => (new DanhMucController())->update(),
    'xoa-danh-muc'      => (new DanhMucController())->destroy(),
    // quản lý sản phẩm
    'san-pham'          => (new SanPhamController())->index(),
    'form-add-san-pham' => (new SanPhamController())->create(),
    'them-san-pham'     => (new SanPhamController())->store(),
    'form-sua-san-pham' => (new SanPhamController())->edit(),
    'sua-san-pham'      => (new SanPhamController())->update(),
    'xoa-san-pham'      => (new SanPhamController())->destroy(),
    //quan lý đơn hàng 
    'don-hang'          => (new QuanLyDonHangController())->danhSachDonHang(),
    'form-sua-don-hang' => (new QuanLyDonHangController())->formEditDonHang(),
    'suaa-don-hang'     => (new QuanLyDonHangController())->postEditDonHang(),
    'xoa-don-hang'      => (new QuanLyDonHangController())->deleteDonHang(),
    'chi-tiet-don-hang' => (new QuanLyDonHangController())->detailDonHang(),
   


};