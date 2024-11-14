<?php

class SanPhamController{
    public $modelSanPham;
    public function __construct(){
        $this->modelSanPham=new SanPhamModel();
    }
    public function index(){
        // lấy ra dữ liệu danh mục
        $SanPham=$this->modelSanPham->getAllSanPham();
        // đưa dữ liệu ra view
        require_once "views/list_san_pham.php";
    }
}

?>