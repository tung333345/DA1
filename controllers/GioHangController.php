<?php

class GioHangController {
    public $gioHangModel;

    public function __construct() {
        $this->gioHangModel = new GioHangModel();
    }

    public function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $gioHang = $this->gioHangModel->getGioHangByUserId($_SESSION['user']);
        require_once './views/cart.php';
    }

    public function add() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $idSanPham = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        $this->gioHangModel->addToCart($_SESSION['user'], $idSanPham, $quantity);

        header('Location: ?act=gio-hang');
        exit();
    }

    public function remove() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $idSanPham = $_GET['id'] ?? null;

        if ($idSanPham) {
            $this->gioHangModel->removeFromCart($_SESSION['user'], $idSanPham);
        }

        header('Location: ?act=gio-hang');
        exit();
    }
}
?>
