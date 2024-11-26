<?php 

class HomeController
{
  public  $modelDanhMuc;
  public  $modelHome;
  
  public function __construct(){
    $this->modelHome = new HomeModel();
    
  }
  public function index() {
    $listSanPham = $this->modelHome->getAllSanPham();
  
    require_once 'views/home.php';
  }
}