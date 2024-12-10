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
                                            <a href="?act=tai-khoan"><i class="fa fa-user-circle"></i>Tài khoản</a>
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
                                <a href="index.html"><img src="assets/images/logo.png" alt="logo TG shop"></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div
                            class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
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
                                    <li><a href="blog.html">Blog</a>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>3</span></a>
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

                                    <button type="submit" class="place-order btn btn-lg btn-round"><a href="?act=chi-tiet-mua-hang">Đặt Hàng</a></button>
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

            <!--Footer Top start-->
            <div
                class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
                <div class="container">
                    <div class="row row-25">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">About TheFace</span></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat</p>
                            <div class="footer-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Information</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Unsubscribe Notification</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Our Offers</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Service</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Contact us</span></h4>
                            <ul class="address">
                                <li><i class="fa fa-home"></i><span>HH2 BacHa building, Tohuu Street Hanoi,
                                        Vietnam</span>
                                </li>
                                <li><i class="fa fa-phone"></i><span><a href="#">(08) 123 456 7890</a></span></li>
                                <li><i class="fa fa-envelope-o"></i><span><a href="#">yourmail@domain.com</a></span>
                                </li>
                            </ul>
                            <div class="payment-box mt-15 mb-15">
                                <a href="#"><img src="./assets/images/payment.png" alt=""></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->
                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="copyright text-left">
                                <p>Copyright &copy;2019 <a href="#">Theface</a>. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4">
                            <div class="footer-logo text-right">
                                <a href="index.html"><img src="./assets/images/logofoo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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