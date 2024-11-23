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
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>yourmail@domain.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li><a href="#"><i class="fa fa-user-circle-o"></i>Login</a>
                                        <ul class="ht-dropdown right">
                                            <!-- <li><a href="compare.html">Compare Products</a></li> -->
                                            <li><a href="my-account.html">My Account</a></li>
                                            <!-- <li><a href="wishlist.html">My Wish List</a></li> -->
                                            <li><a href="login-register.html">Sign In</a></li>
                                            <!-- <li><a href="login-register.html">Sign In</a></li> -->
                                        </ul>
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
                                    <li><a href="?act=/">Home</a>
                                    </li>
                                    <li><a href="?act=san-pham&id=<?= isset($sanPham['id']) ? $sanPham['id'] : '' ?>">Shop</a>
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
                            <h1 style="margin: 0 !important;">Shop</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div
            class="shop-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">

                        <!-- Sidebar Danh Mục -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">DANH MỤC</h3>
                            <ul class="sidebar-list">
                                <?php foreach ($danhMucs as $danhMuc): ?>
                                    <li>
                                        <a href="?act=san-pham-theo-danh-muc&id_danh_muc=<?php echo $danhMuc['id_danh_muc']; ?>">
                                            <i class="fa fa-angle-right"></i><?php echo htmlspecialchars($danhMuc['ten_danh_muc']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Price</h3>
                            <ul class="sidebar-list">
                                <li><a href="#"><i class="fa fa-angle-right"></i><span class="price">€0.00</span> -
                                        <span class="price">€99.99</span> <span class="count">(7)</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i><span class="price">€100.00</span> and
                                        above <span class="count">(14)</span></a></li>
                            </ul>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="assets/images/banner/h4-banner-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="shop-banner mb-35 mb-xs-20">
                                    <img src="./assets/images/banner/category-image.jpg" alt="">
                                </div>
                                <div class="shop-banner-title">
                                    <h2>Shop</h2>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Grid & List View Start -->
                                <div
                                    class="shop-topbar-wrapper d-md-flex justify-content-md-between align-items-center">
                                    <div class="grid-list-option">
                                        <!-- <ul class="nav">
                                            <li>
                                                <a class="active show" data-toggle="tab" href="#grid"><i
                                                        class="fa fa-th"></i></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#list" class=""><i
                                                        class="fa fa-th-list"></i></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <!--Toolbar Short Area Start-->
                                    <div class="toolbar-short-area d-md-flex align-items-center">
                                        <div class="toolbar-shorter ">
                                            <label>Sort By:</label>
                                            <select class="wide">
                                                <option data-display="Select">Nothing</option>
                                                <option value="Relevance">Relevance</option>
                                                <option value="Name, A to Z">Name, A to Z</option>
                                                <option value="Name, Z to A">Name, Z to A</option>
                                                <option value="Price, low to high">Price, low to high</option>
                                                <option value="Price, high to low">Price, high to low</option>
                                            </select>
                                        </div>
                                        <div class="toolbar-shorter ">
                                            <label>Show</label>
                                            <select class="small">
                                                <option data-display="Select">9</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                            </select>
                                            <span>per page</span>
                                        </div>

                                    </div>
                                    <!--Toolbar Short Area End-->
                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="shop-product">
                                    <div id="myTabContent-2" class="tab-content">
                                        <div id="grid" class="tab-pane fade active show">
                                            <div class="product-grid-view">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <?php foreach ($listSanPham as $sanPham): ?>
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <!-- Sản phẩm đơn lẻ Bắt đầu -->
                                                                <div class="single-product mb-30"
                                                                    style="border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                                                                    <div class="product-img">
                                                                        <a href="single-product.html">
                                                                            <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>"
                                                                                alt="<?= $sanPham['ten_san_pham'] ?>">
                                                                        </a>
                                                                        <div class="product-action"
                                                                            style="display: flex; align-items: center; justify-content: center; padding: 4px; background-color: #f8f8f8; border-radius: 5px;">
                                                                            <a class="product-btn" href="#"
                                                                                style="background-color: #ff6f61; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: block; width: auto; text-align: center;">Add
                                                                                to Cart</a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <h3><a
                                                                                href="single-product.html"><?= $sanPham['ten_san_pham'] ?></a>
                                                                        </h3>

                                                                        <h4 class="price">
                                                                            <span class="new"
                                                                                style="color: #cea679; font-weight: bold;"><?= $sanPham['gia_khuyen_mai'] ?>$</span>
                                                                            <span class="old"
                                                                                style="text-decoration: line-through; color: grey;"><?= $sanPham['gia_san_pham'] ?>$</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <!-- Sản phẩm đơn lẻ Kết thúc -->
                                                            </div>
                                                        <?php endforeach; ?>
                                                        <!-- Single Product End -->
                                                        < </div>
                                                    </div>
                                                </div>
                                                <div id="list" class="tab-pane fade">
                                                    <div class="product-list-view">
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-18.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Brux</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€90.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-17.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">Aftershave
                                                                                    Lotion</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€90.00</span><span
                                                                                    class="old">€150.00</span></h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-15.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Brush</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€110.00</span><span
                                                                                    class="old">€130.00</span></h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-12.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Bruj</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€80.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-product">
                                                                        <div class="product-img mb-0 mb-xs-25">
                                                                            <a href="single-product.html">
                                                                                <img src="./assets/images/product/product-13.jpg"
                                                                                    alt="">
                                                                            </a>
                                                                            <span class="descount-sticker">-10%</span>
                                                                            <span class="sticker">New</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3><a href="single-product.html">White
                                                                                    Shave
                                                                                    Bruk</a></h3>
                                                                            <h4 class="price"><span
                                                                                    class="new">€60.00</span>
                                                                            </h4>
                                                                            <div class="ratting">
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                            </div>
                                                                            <p>Pellentesque habitant morbi tristique
                                                                                senectus et
                                                                                netus et malesuada fames ac turpis
                                                                                egestas.
                                                                                Vestibulum tortor quam, feugiat vitae,
                                                                                ultricies
                                                                                eget, tempor sit amet, ante. Donec eu
                                                                                libero sit
                                                                                amet quam egestas semper. Aenean
                                                                                ultricies mi
                                                                                vitae est. Mauris placerat eleifend leo.
                                                                            </p>
                                                                            <div
                                                                                class="product-action d-flex justify-content-between">
                                                                                <a class="product-btn" href="#">Add to
                                                                                    Cart</a>
                                                                                <ul class="d-flex">
                                                                                    <li><a href="#quick-view-modal-container"
                                                                                            data-toggle="modal"
                                                                                            title="Quick View"><i
                                                                                                class="fa fa-eye"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-heart-o"></i></a>
                                                                                    </li>
                                                                                    <li><a href="#"><i
                                                                                                class="fa fa-exchange"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-30 mb-sm-40 mb-xs-30">
                                    <div class="col">
                                        <ul class="page-pagination">
                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="active"><a href="#">01</a></li>
                                            <li><a href="#">02</a></li>
                                            <li><a href="#">03</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Section End -->

               
                <footer class="footer-section section bg-dark">

                    <!--Footer Top start-->
                    <div
                        class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
                        <div class="container">
                            <div class="row row-25">

                                <!--Footer Widget start-->
                                <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                    <h4 class="title"><span class="text">About TheFace</span></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat
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
                                        <li><i class="fa fa-phone"></i><span><a href="#">(08) 123 456 7890</a></span>
                                        </li>
                                        <li><i class="fa fa-envelope-o"></i><span><a
                                                    href="#">yourmail@domain.com</a></span>
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