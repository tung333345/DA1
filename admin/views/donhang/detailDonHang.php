<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Quản lý danh mục |Thực phẩm chức năng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once __DIR__ . '/../layouts/libs_css.php';
    

    // require_once "views/layouts/libs_css.php";
   
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
         require_once __DIR__ . '/../layouts/libs_css.php';
         require_once __DIR__ . '/../layouts/header.php';
         require_once __DIR__ . '/../layouts/siderbar.php';
         require_once __DIR__ . '/../layouts/libs_js.php';
         
        // require_once "views/layouts/header.php";
        // require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý danh sách đon hàng-đơn hàng:<?=$donhang['ma_don_hang']?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                                    </ol>
                                </div>

                            </div>
                            <?php 
                            if ($donhang['trang_thai_id']==1){
                                $colorAlerts = 'primary';
                            }elseif($donhang['trang_thai_id']>=2 && $donhang['trang_thai_id']<=9){
                                $colorAlerts = 'warning';

                            }elseif($donhang['trang_thai_id']==10){
                                $colorAlerts = 'success';
                            }else{
                                $colorAlerts = 'danger';
                            }
                            ?>
                            <div class="alert alert-<?= $colorAlerts; ?>"role="alert">
                                Đơn hàng:<?=$donhang['ten_trang_thai']?>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Danh sách đơn hàng</h4>
                                       <i class="fas fa-globe"></i>Thực phẩm chức năng NUTRI HARMONY
                                       <small class="float-right">Date: <?php formatDate($donhang['ngay_dat'])
                                       ?></small></h4>
                                    </div><!-- end card header -->
                                    <div class="row invoice-infor">
                                        <div class="col-sm-4 invoice-col"> 
                                            Thông tin người đặt
                                            <address>
                                                <strong><?= $donhang['ho_ten'] ?></strong><br>
                                                Email:<?= $donhang['email']?><br>
                                                SDT:<?= $donhang['so_dien_thoai']?><br>
                                            </address>
                                        </div>
                                        <div class="col-sm-4 invoice-col"> 
                                            Thông tin người nhận
                                            <address>
                                                <strong><?= $donhang['ten_nguoi_nhan'] ?></strong><br>
                                                Email:<?= $donhang['email_nguoi_nhan']?><br>
                                                SDT:<?= $donhang['sdt_nguoi_nhan']?><br>
                                                Địa chỉ:<?= $donhang['dia_chi_nguoi_nhan']?><br>
                                            </address>
                                        </div>
                                        <div class="col-sm-4 invoice-col"> 
                                            Thông tin
                                            
                                              <b>  Mã đon hàng:<?= $donhang['ma_don_hang'] ?></b><br>
                                              <b>   Tổng tiền:<?= $donhang['tong_tien']?>
                                              <b>   Ghi chú:<?= $donhang['ghi_chu']?>
                                              <b> Phương thức thanh toán:<?= $donhang['ten_phuong_thuc']?>
                                            </address>
                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <div class="live-preview">
                                            <div class="table-responsive">
                                                <table class="table table-striped align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">TÊN SẢN PHẨM</th>
                                                            <th scope="col">ĐON GIÁ</th>
                                                            <th scope="col">SỐ LƯỢNG</th>
                                                           
                                                            <th scope="col">THÀNH TIỀN</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $tong_tien = 0;?>
                                                        <?php
                                                         foreach ($sanPhamDonHang as $key => $sanPham): ?>
                                                            <tr>
                                                                <td class="fw-medium"><?= $key + 1 ?></td>
                                                                <td><?= $sanPham['ten_san_pham'] ?></td>
                                                                <td><?= $sanPham['don_gia'] ?></td>
                                                                <td><?= $sanPham['so_dien_thoai'] ?></td>
                                                                <td><?= $sanPham['thanh_tien'] ?></td>
                                                                
                                                               
                                                                

                                                                                         

                                                            </tr>
                                                            <?php $tong_tien +=$sanPham['thanh_tien'] ;?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                    
                                                   
                                                        <!-- </tfoot> -->
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="lead">Ngày đặt hàng:<?= $donhang['ngay_dat']?></p>
                                           <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                <th style="width:50%">Thành tiền</th>
                                                <td><?= $tong_tien  ?></td>
                                                </tr>
                                                <tr>
                                                <th style="width:50%">Vận chuyển</th>
                                                <td>10.000</td>
                                                </tr>
                                                <tr>
                                                <th style="width:50%">Tổng tiền</th>
                                                <td><?= $tong_tien +100000  ?></td>
                                                </tr>
                                                
                                            </table>

                                           </div>
                                            </div>
                                        </div>

                                    </div><!-- end card-body -->
                                </div><!-- end card -->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    

    ?>

</body>

</html>