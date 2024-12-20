<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/BaocaothongkeController.php';
require_once 'controllers/TaiKhoanController.php';
require_once 'controllers/QuanLyDonHangController.php';


// Require toàn bộ file Models
require_once "models/TaiKhoan.php";
require_once 'controllers/DanhMucController.php';
require_once 'controllers/SanPhamController.php';


// Require toàn bộ file Models
require_once "models/DanhMucModel.php";
require_once "models/SanPhamModel.php";
require_once "models/QuanLyDonHangModel.php";



// Route
$act = $_GET['act'] ?? '/';

// Sử dụng match để xử lý routing
match ($act) {
    // Trang chủ (báo cáo thống kê)
    // '/' => (new BaocaothongkeController())->home(),
    // Dashboard
    '/' => (new DashboardController())->index(),

    // Quản lý tài khoản quản trị
    'list-tai-khoan-quan-tri' => (new TaiKhoanController())->danhsachQuanTri(),
    'form-them-quan-tri' => (new TaiKhoanController())->formAddQuanTri(),
    'them-quan-tri' => (new TaiKhoanController())->postAddQuanTri(),
    'form-sua-quan-tri' => (new TaiKhoanController())->formEditQuanTri(),
    'sua-quan-tri' => (new TaiKhoanController())->postEditQuanTri(),
    'xoa-quan-tri' => (new TaiKhoanController())->deleteQuanTri(),
    // tài khoản khách hàng
    'list-tai-khoan-khach-hang' => (new TaiKhoanController())->danhsachKhachHang(),
    
    // quản lý danh mục sản phẩm
    'danh-mucs'         => (new DanhMucController())->index(),
    'form-add-danh-muc' => (new DanhMucController())->create(),
    'them-danh-muc'     => (new DanhMucController())->store(),
    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc'      => (new DanhMucController())->update(),
    'xoa-danh-muc'      => (new DanhMucController())->destroy(),
    // quản lý sản phẩm
    'san-pham'          => (new SanPhamController())->index(),
    'form-add-san-pham' => (new SanPhamController())->createSanPham(),
    'them-san-pham'     => (new SanPhamController())->postAddSanPham(),
    'form-sua-san-pham' => (new SanPhamController())->editSanPham($_GET['san_pham_id'] ?? null),
    'sua-san-pham'      => (new SanPhamController())->updateSanPham(),
    'xoa-san-pham'      => (new SanPhamController())->destroy(),
     //quan lý đơn hàng 
     'don-hang'          => (new QuanLyDonHangController())->danhSachDonHang(),
     'form-sua-don-hangs' => (new QuanLyDonHangController())->formEditDonHang(),
     'sua-don-hang'     => (new QuanLyDonHangController())->postEditDonHang(),
    //  'chi-tiet-don-hang' => (new QuanLyDonHangController())->detailDonHang(),
     'chi-tiet-don-hangs' => (new QuanLyDonHangController())->detailDonHang(),


    //  default => throw new Exception("Không tìm thấy route: $act"),
};
    
