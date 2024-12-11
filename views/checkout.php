<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
    <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div
                            class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i>(08) 123 456 7890</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>tungnxph51891@fpt.edu.vn</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li>
                                        <?php if (isset($_SESSION['user'])): ?>
                                            <a href="#"><i class="fa fa-user-circle"></i>
                                                <?= $_SESSION['user']['ten_dang_nhap'] ?></a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="?act=dang-xuat">Đăng xuất</a></li>
                                            </ul>
                                        <?php else: ?>
                                            <a href="?act=tai-khoan"><i class="fa fa-user-circle-o"></i>Tài khoản</a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="?act=tai-khoan">My Account</a></li>
                                                <li><a href="?act=tai-khoan">Đăng ký</a></li>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 80" width="70%" height="70%"
                                    preserveAspectRatio="xMidYMid meet">
                                    <!-- Leaf Shape -->
                                    <path d="M50 10 C20 40, 20 70, 50 70 C80 70, 80 40, 50 10 Z" fill="#66bb6a" />
                                    <path d="M50 10 C80 40, 80 70, 50 70 C20 70, 20 40, 50 10 Z" fill="#a5d6a7" />

                                    <!-- Circle for Harmony Symbol -->
                                    <circle cx="50" cy="40" r="15" fill="#ffffff" stroke="#388e3c" stroke-width="2" />

                                    <!-- Brand Name -->
                                    <text x="70" y="50" font-family="Arial, sans-serif" font-size="14" fill="#388e3c"
                                        dominant-baseline="middle" text-anchor="left">
                                        NutriHarmony
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div
                            class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="?act=/">Trang
                                            chủ</a></li>



                                    <li><a style="display: inline-block; white-space: nowrap;"
                                            href="?act=san-pham-theo-danh-muc">Sản phẩm</a></li>


                                    <!-- 
                                            <ul class="mega-menu four-column">
                                                <li><a href="#" class="item-link">Pages</a>
                                                    <ul>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login-register.html">Login Register</a></li>
                                                        <li><a href="faq.html">Frequently Questions</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Shop Layout</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                                        <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                        <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                                Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Product Details</a>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-variable.html">Variable Product</a></li>
                                                        <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                                        </li>
                                                        <li><a href="single-product-group.html">Group Product</a></li>
                                                        <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                                        </li>
                                                        <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                                        </li>
                                                        <li><a href="single-product-gallery-left.html">Product Gallery
                                                                Left</a></li>
                                                        <li><a href="single-product-gallery-right.html">Product Gallery
                                                                Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="item-link">Product Details</a>
                                                    <ul>
                                                        <li><a href="single-product-sticky-left.html">Product Sticky
                                                                Left</a></li>
                                                        <li><a href="single-product-sticky-right.html">Product Sticky
                                                                Right</a></li>
                                                        <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                         -->
                                    </li>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="blog.html">Blog</a>
                                    </li>
                                    <li><a style="display: inline-block; white-space: nowrap;" href="about.html">About
                                            Us</a></li>
                                    <li><a style="display: inline-block; white-space: nowrap;"
                                            href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">

                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">

                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="?act=gio-hang"><i class="fa fa-shopping-cart"></i><span>
                                    <?php if (!empty($gioHang)): ?>
                                        <?= count($gioHang) ?>
                                    <?php else: ?>
                                        0
                                    <?php endif; ?>
                                </span></a>
                                <!--Mini Cart Dropdown Start-->

                                <!--Mini Cart Dropdown End-->
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1>Check Out</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Check out</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!--Checkout section start-->
        <div
            class="checkout-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Checkout Form Start-->
                        <form action="?act=place-order" method="POST" class="checkout-form">
                            <div class="row row-40">

                                <!-- Billing Address -->
                                <div class="col-lg-7">
                                    <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Thông Tin Người Nhận</h4>
                                        <div class="row">
                                            <!-- <div class="col-md-12 col-12 mb-5">
                                                <label for="ten_nguoi_nhan" class="required">Họ và Tên *</label>
                                                <input type="text" id="ten_nguoi_nhan" placeholder="Nhập họ và tên" required>
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label for="email_nguoi_nhan" class="required">Email *</label>
                                                <input type="email" id="email_nguoi_nhan" placeholder="Nhập email" required>
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label for="sdt_nguoi_nhan" class="required">Số Điện Thoại *</label>
                                                <input type="text" id="sdt_nguoi_nhan" placeholder="Nhập số điện thoại"
                                                    required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <label for="dia_chi_nguoi_nhan">Địa Chỉ *</label>
                                                <input type="text" id="dia_chi_nguoi_nhan" placeholder="Nhập địa chỉ" required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <label for="ghi_chu">Ghi Chú *</label>
                                                <textarea name="ghi_chu" id="ghi_chu" cols="30" rows="3" placeholder="Ghi chú đơn hàng" required></textarea>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <div class="check-box">
                                                    <input type="checkbox" id="shipping_address_toggle"
                                                        name="shipping_address_toggle">
                                                    <label for="shipping_address_toggle">Giao đến địa chỉ khác</label>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Họ và Tên *</label>
                                                <input type="text" name="name" placeholder="Nhập họ và tên" required>
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Email *</label>
                                                <input type="email" name="email" placeholder="Nhập email" required>
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Số Điện Thoại *</label>
                                                <input type="text" name="phone" placeholder="Nhập số điện thoại"
                                                    required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <label>Địa Chỉ *</label>
                                                <input type="text" name="address" placeholder="Nhập địa chỉ" required>
                                            </div>
                                            <div class="col-12 mb-5">
                                                <div class="check-box">
                                                    <input type="checkbox" id="shipping_address_toggle"
                                                        name="shipping_address_toggle">
                                                    <label for="shipping_address_toggle">Giao đến địa chỉ khác</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Shipping Address -->
                                    <div id="shipping-form" class="mb-10" style="display: none;">
                                        <h4 class="checkout-title">Địa Chỉ Nhận Hàng</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Họ và Tên *</label>
                                                <input type="text" name="shipping_name" placeholder="Nhập họ và tên">
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Email *</label>
                                                <input type="email" name="shipping_email" placeholder="Nhập email">
                                            </div>
                                            <div class="col-md-12 col-12 mb-5">
                                                <label>Số Điện Thoại *</label>
                                                <input type="text" name="shipping_phone"
                                                    placeholder="Nhập số điện thoại">
                                            </div>
                                            <div class="col-12 mb-5">
                                                <label>Địa Chỉ *</label>
                                                <input type="text" name="shipping_address" placeholder="Nhập địa chỉ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cart Total -->
                                <div class="col-lg-5">
                                    <div class="checkout-cart-total">
                                        <h4 class="checkout-title">Tổng Giỏ Hàng</h4>
                                        <ul>
                                            <?php foreach ($gioHang as $item): ?>
                                                <li><?= htmlspecialchars($item['ten_san_pham']) ?> x
                                                    <?= htmlspecialchars($item['so_luong']) ?>
                                                    <span>$<?= number_format($item['gia_san_pham'] * $item['so_luong'], 2) ?></span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <p>Tạm tính <span>$<?= number_format($total, 2) ?></span></p>
                                        <p>Phí vận chuyển <span>$00.00</span></p>
                                        <h4>Tổng cộng <span>$<?= number_format($total, 2) ?></span></h4>
                                    </div>

                                    <!-- Payment Method -->
                                    <div class="checkout-payment-method">
                                        <h4 class="checkout-title">Phương Thức Thanh Toán</h4>
                                        <div class="single-method">
                                            <input type="radio" id="payment_cash" name="payment_method" value="cash"
                                                required>
                                            <label for="payment_cash">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="single-method">
                                            <input type="radio" id="payment_bank" name="payment_method" value="bank"
                                                required>
                                            <label for="payment_bank">Chuyển khoản ngân hàng</label>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="chi-tiet-mua-hang btn btn-lg btn-round">Đặt Hàng</button> -->

                                    <button type="submit" class="place-order btn btn-lg btn-round">Đặt Hàng</></button>
                                    <!-- <button type="submit" class="chi_tiet_mua_hang btn btn-lg btn-round">Đặt Hàng</button> -->
                                   <!-- <button> <a style="color: #fff;" class="btn" href="?act=chi-tiet-mua-hang">Đặt Hàng1</a></button> -->

                                </div>
                            </div>
                            
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!--Checkout section end-->




        <footer class="footer-section section bg-dark">

            <
            

            

            <!--Footer Top start-->
            <footer class="footer bg-dark text-white">
                <div class="container py-4">
                    <div class="row align-items-center">
                        <!-- Logo và thông tin -->
                        <div class="col-md-4 text-center text-md-left mb-3 mb-md-0">
                            <p class="mt-2 small">
                                Sản phẩm chất lượng, dịch vụ tận tâm. Luôn đồng hành cùng bạn.
                            </p>
                        </div>

                        <!-- Liên kết nhanh -->
                        <div class="col-md-4 text-center">
                            <h5 class="mb-3">Liên kết</h5>
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li class="mx-3"><a href="#about" class="text-white text-decoration-none small">Về
                                        chúng tôi</a></li>
                                <li class="mx-3"><a href="#policy" class="text-white text-decoration-none small">Chính
                                        sách</a></li>
                                <li class="mx-3"><a href="#contact" class="text-white text-decoration-none small">Liên
                                        hệ</a></li>
                            </ul>
                        </div>

                        <!-- Mạng xã hội -->
                        <div class="col-md-4 text-center text-md-right">
                            <h5 class="mb-3">Kết nối</h5>
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phần bản quyền -->
                <div class="footer-bottom text-center py-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                    <p class="mb-0 small">
                        &copy; 2024 <a href="#" class="text-white text-decoration-none">YourBrand</a>. Tất cả quyền
                        được bảo lưu.
                    </p>
                </div>
        </footer>
            <!--Footer bottom end-->
        </footer>
    </div>

</body>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>