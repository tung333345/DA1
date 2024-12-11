<?php

class GioHangController
{
    public $gioHangModel;
    public $userModel;
    public $lichSuMoel;

    public function __construct()
    {
        $this->gioHangModel = new GioHangModel();
        $this->userModel = new User();
        $this->lichSuMoel = new LichSuModel();
    }

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ?act=tai-khoan');
            exit();
        }
        $gioHang = $this->gioHangModel->getGioHangByUserId($_SESSION['user']);
        require_once './views/cart.php';
    }

    public function add()
    {
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

    public function remove()
    {
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
    public function updateCartQuantity()
    {
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

    public function checkout()
    {
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

    public function placeOrder()
    {
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
        $paymentMethod = 1;  // Phương thức thanh toán mặc định
        $ghiChu = $_POST['ghi_chu'] ?? null;
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
            $donhangid = $this->gioHangModel->createOrder($userId, $name, $email, $phone, $address, $total, $paymentMethod, $trangThaiId, $ghiChu);

            // Sau khi tạo đơn hàng thành công, thêm chi tiết giỏ hàng vào bảng chi_tiet_don_hangs
            foreach ($gioHang as $item) {
                $sanPhamId = $item['id_san_pham'];
                $donGia = $item['gia_san_pham'];
                $soLuong = $item['so_luong'];
                $thanhTien = $donGia * $soLuong;

                // Gọi hàm insert vào bảng chi_tiet_don_hangs
                $this->lichSuMoel->themChiTietDonHang($donhangid, $sanPhamId, $donGia, $soLuong, $thanhTien);
            }
            // Xóa chi tiết giỏ hàng của người dùng sau khi đặt hàng thành công
            $this->gioHangModel->clearCart($userId);  // Truyền $userId để lấy giỏ hàng tương ứng

            // Chuyển hướng đến trang chi tiết đơn hàng
            header('Location: ?act=chi-tiet-mua-hang&id=' . $donhangid);
            exit();

        } catch (Exception $e) {
            $_SESSION['error'] = 'Đã xảy ra lỗi khi đặt hàng: ' . $e->getMessage();
            header('Location: ?act=checkout');
            exit();
        }
    }



    //


    //

    public function lichSuMuaHang()
    {
        if (isset($_SESSION['user'])) {
            //lay ra thon tin tai khoan dang nhap
            
            $user = $this->lichSuMoel->getDonHangFromUser($_SESSION['user']);
            $tai_khoan_id = $_SESSION['user']['ma_nguoi_dung'];
 // Sử dụng trực tiếp ID từ session

            //lấy danh sách strangj thái đơn hàng
            $arrTrangThaiDonHang = $this->lichSuMoel->getTrangThaiDonHang();
            $trangThaiDonHang = array_column($arrTrangThaiDonHang, 'ten_trang_thai', 'id');
            //lấy danh sách phuong thuc thanh toán
            $arrPhuongThucThanhToan = $this->lichSuMoel->getPhuongThucThanhToan();
            $phuongThucThanhToan = array_column($arrPhuongThucThanhToan, 'ten_phuong_thuc', 'id');

            //láy dnah sách tất cả đơn hàng của tài khoản


            $donhang = $this->lichSuMoel->getDonHangFromUser($tai_khoan_id);
            
            require_once "./views/lichSuMuaHang.php";
        } else {
            var_dump('Bạn chưa đang nhập');
            die;
        }
    }
    public function chiTietMuaHang()
    {

        if (isset($_SESSION['user'])) {
            // Lấy ID đơn hàng từ URL
            $donhangid = $_GET['id'] ?? null;

            // Kiểm tra xem ID có tồn tại không
            if ($donhangid === null) {
                echo "ID đơn hàng không được cung cấp.";
                exit;
            }

            // Lấy thông tin đơn hàng theo ID
            $donhang = $this->lichSuMoel->getDonHangById($donhangid);
            $arrTrangThaiDonHang = $this->lichSuMoel->getTrangThaiDonHang();
            $trangThaiDonHang = array_column($arrTrangThaiDonHang, 'ten_trang_thai', 'id');
            //lấy danh sách phuong thuc thanh toán
            $arrPhuongThucThanhToan = $this->lichSuMoel->getPhuongThucThanhToan();
            $phuongThucThanhToan = array_column($arrPhuongThucThanhToan, 'ten_phuong_thuc', 'id');
            // Kiểm tra xem đơn hàng có tồn tại không
            $chiTietDonHang = $this->lichSuMoel->getChiTietDonHangByDonHangId($donhangid);

            if (!$donhang) {
                echo "Đơn hàng không tồn tại.";
                exit;
            }

            // Lấy chi tiết đơn hàng


            // Truyền dữ liệu vào view
            require_once "./views/chiTietMuaHang.php";
        } else {
            var_dump('Bạn chưa đăng nhập');
            die;
        }
    }

    public function huyDonHang()
    {
        if (isset($_SESSION['user'])) {
            // Lấy thông tin tài khoản đăng nhập
            $user = $this->lichSuMoel->getDonHangFromUser($_SESSION['user']);
            $tai_khoan_id = $_SESSION['user']['ma_nguoi_dung'];
        
            // Lấy ID đơn hàng từ URL
            $donhangid = $_GET['id'];
        
            // Kiểm tra đơn hàng
            $donhang = $this->lichSuMoel->getDonHangById($donhangid);
        
            // Kiểm tra nếu đơn hàng không tồn tại
            if ($donhang === false) {
                echo "Không tìm thấy đơn hàng.";
                exit;
            }
        
            // Kiểm tra quyền của người dùng với đơn hàng
            if ($donhang['tai_khoan_id'] != $tai_khoan_id) {
                echo "Bạn không có quyền hủy đơn hàng này.";
                exit;
            }
        
            // Kiểm tra trạng thái đơn hàng
            if ($donhang['trang_thai_id'] != 1) {
                echo "Chỉ đơn hàng ở trạng thái 'chưa xác nhận' mới có thể hủy.";
                exit;
            }
        
            // Hủy đơn hàng
            $this->lichSuMoel->updateTrangThaiDonHang($donhangid, 11);
            header('Location: ?act=lich-su-mua-hang');
            exit;
        } else {
            var_dump('Bạn chưa đăng nhập');
            die;
        }
        
    }
}
?>