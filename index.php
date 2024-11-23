<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ


// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/SanPhamController.php';

// Require toàn bộ file Models
require_once './models/HomeModel.php';
require_once './models/SanPhamModel.php';
require_once './models/DanhMucModel.php';



// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'                 => (new HomeController())->index(),
    'san-pham'          => (new SanPhamController())->sanPham($_GET['id']),
    'san-pham-theo-danh-muc' => (new SanPhamController())->sanPhamTheoDanhMuc(  idDanhMuc: $_GET['id_danh_muc']),
};