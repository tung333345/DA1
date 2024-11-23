<?php 

class HomeController
{
  public function __construct(){
    $this->modelHome = new HomeModel();
  }
  public function index() {
    $listSanPham = $this->modelHome->getAllSanPham();
    require_once 'views/home.php';
  }
}