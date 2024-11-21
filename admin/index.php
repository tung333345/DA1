<?php 
session_start();

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/BaocaothongkeController.php';
require_once 'controllers/TaiKhoanController.php';

// Require toàn bộ file Models
require_once "models/TaiKhoan.php";

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

    default => function() {
        echo "404 Not Found";
    },
};