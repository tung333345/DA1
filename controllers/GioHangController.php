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
    public function updateCartQuantity() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
    
        $userId = $_SESSION['user'];
        $idSanPham = $_POST['idSanPham'] ?? null;
        $soLuong = $_POST['soLuong'] ?? null;
    
        if ($idSanPham && $soLuong) {
            // Lấy số lượng tồn kho từ model
            $soLuongTon = $this->gioHangModel->getSoLuongTon($idSanPham);
    
            // Kiểm tra số lượng nhập vào
            if ($soLuong > $soLuongTon) {
                $_SESSION['error'] = 'Số lượng vượt quá tồn kho!';
                header('Location: ?act=gio-hang');
                exit();
            }
            
    
            // Cập nhật số lượng trong giỏ hàng
            $this->gioHangModel->updateSoLuongSanPham($userId, $idSanPham, $soLuong);
        }
    
        header('Location: ?act=gio-hang');
        exit();
    }
    
    public function checkout() {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }

        // Lấy giỏ hàng của người dùng
        $gioHang = $this->gioHangModel->getGioHangByUserId($_SESSION['user']);
        
        // Tính tổng tiền từ giỏ hàng
        $total = 0;
        foreach ($gioHang as $item) {
            $total += $item['gia_san_pham'] * $item['so_luong'];
        }

        // Truyền giỏ hàng và tổng tiền vào view
        require_once './views/checkout.php';
    }

    public function placeOrder() {
        if (!isset($_SESSION['user'])) {
            // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
            header('Location: ?act=tai-khoan');
            exit();
        }
    
        // Lấy thông tin từ form
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $paymentMethod = $_POST['payment_method'] ?? ''; // Lấy phương thức thanh toán
        $ghiChu = $_POST['ghi_chu'] ?? null; // Ghi chú (nếu có)
        $userId = $_SESSION['user'];
    
        // Lấy giỏ hàng của người dùng
        $gioHang = $this->gioHangModel->getGioHangByUserId($userId);
        if (empty($gioHang)) {
            $_SESSION['error'] = 'Giỏ hàng của bạn đang trống!';
            header('Location: ?act=gio-hang');
            exit();
        }
    
        // Tính tổng tiền từ giỏ hàng
        $total = 0;
        foreach ($gioHang as $item) {
            $total += $item['gia_san_pham'] * $item['so_luong'];
        }
    
        // Giả sử trạng thái đơn hàng là 1 (đang xử lý)
        $trangThaiId = 1;
    
        try {
            // Lưu đơn hàng vào cơ sở dữ liệu
            $this->gioHangModel->createOrder($userId, $name, $email, $phone, $address, $total, $paymentMethod, $trangThaiId, $ghiChu);
    
            // Chuyển hướng đến trang xác nhận đặt hàng
            
        } catch (Exception $e) {
            // Xử lý lỗi nếu có
            $_SESSION['error'] = 'Đã xảy ra lỗi khi đặt hàng: ' . $e->getMessage();
            header('Location: ?act=checkout');
            exit();
        }
    }
    
}
?>
