<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Quản lý đơn hàng |Thực phẩm chức năng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
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
                                <h4 class="mb-sm-0">Thông tin đơn hàng: <?= $donhang['ma_don_hang']?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Cập nhật đơn hàng</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Cập nhật thông tin đơn hàng: <?= $donhang['ma_don_hang']?></h4>
                                    
                                </div><!-- end card header -->

                                <div class="card-body">
                                   
                                    <div class="live-preview">
                                        <form action="?act=sua-don-hang" method="post" enctype="multipart/form-data" >
                                            <input type="hidden" name="don_hang_id" value="<?= $donhang['id'] ?>" >
                                            <div class="row">
                                               
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">Tên người nhận
                                                        <label for="citynameInput" class="form-label"></label>
                                                        <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="ten_nguoi_nhan" value="<?= $donhang['ten_nguoi_nhan'] ?> " readonly >
                                                        <span class="text-danger" >
                                                        <?= !empty($_SESSION['errors']['ten_nguoi_nhan'])? $_SESSION['errors']['ten_nguoi_nhan'] :'' ?>
                                                        </span>
                                                    </div>
                                                    <div class="mb-3">Số điện thoại
                                                        <label for="citynameInput" class="form-label"></label>
                                                        <input  type="text" class="form-control" placeholder="Nhập tên danh mục" name="sdt_nguoi_nhan" value="<?= $donhang['sdt_nguoi_nhan'] ?>" readonly >
                                                        <span class="text-danger" >
                                                        <?= !empty($_SESSION['errors']['sdt_nguoi_nhan'])? $_SESSION['errors']['sdt_nguoi_nhan'] :'' ?>
                                                        </span>
                                                    </div>
                                                    <div class="mb-3">Email
                                                        <label for="citynameInput" class="form-label"></label>
                                                        <input type="email" class="form-control" placeholder="Nhập tên danh mục" name="email_nguoi_nhan" value="<?= $donhang['email_nguoi_nhan'] ?>"  readonly>
                                                        <span class="text-danger" >
                                                        <?= !empty($_SESSION['errors']['email_nguoi_nhan'])? $_SESSION['errors']['email_nguoi_nhan'] :'' ?>
                                                        </span>
                                                    </div>
                                                    <div class="mb-3">Địa chỉ
                                                        <label for="citynameInput" class="form-label"></label>
                                                        <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="dia_chi_nguoi_nhan" value="<?= $donhang['dia_chi_nguoi_nhan'] ?>" readonly>
                                                        <span class="text-danger" >
                                                        <?= !empty($_SESSION['errors']['dia_chi_nguoi_nhan'])? $_SESSION['errors']['dia_chi_nguoi_nhan'] :'' ?>
                                                        </span>
                                                    </div>
                                                    <div class="mb-3">Ghi chú
                                                        <label for="citynameInput" class="form-label"></label>
                                                        <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="ghi_chu" value="<?= $donhang['ghi_chu'] ?>" >
                                                        <span class="text-danger" >
                                                        <?= !empty($_SESSION['errors']['ghi_chu'])? $_SESSION['errors']['ghi_chu'] :'' ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                        <label for="id_danh_muc" class="form-label">Trạng thái đơn hàng</label>
                                                        <select class="form-control" name="trang_thai_id">
                                                            <?php foreach ($listTrangThaiDonHang as $trangthai): ?>
                                                                <option
                                                                <?php
                                                                if($donhang['trang_thai_id'] > $trangthai['id']
                                                                || $donhang['trang_thai_id'] ==8
                                                                || $donhang['trang_thai_id'] ==11


                                                                ){
                                                                  echo 'disabled' ;
                                                                } 
                                                                ?>

                                                                 value="<?= $trangthai['id'] ?>" 
                                                                 <?= $trangthai['id'] == $donhang['trang_thai_id'] ? 'selected' : '' ?>>
                                                                    <?= $trangthai['ten_trang_thai'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>

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