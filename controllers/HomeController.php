<?php 

class HomeController
{
  public  $modelDanhMuc;
  public  $modelHome;
  public  $gioHangModel;
  
  
  public function __construct(){
    $this->modelHome = new HomeModel();
    $this->gioHangModel = new GioHangModel();
  
  }
  public function index() {
    $listSanPham = $this->modelHome->getAllSanPham();
    if(isset($_SESSION['user'])){
      $gioHang = $this->gioHangModel->getGioHangByUserId($_SESSION['user']);
    }
    require_once 'views/home.php';
  }
}