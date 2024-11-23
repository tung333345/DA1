<?php

class SanPhamController
{
   public $modelSanPham;
   public $modelDanhMuc;
   public function __construct()
   {
    $this->modelSanPham = new SanPhamModel();
    $this->modelDanhMuc = new DanhMucModel();
   }
   public function sanPham($idDanhMuc)
   {
    $listSanPham = $this->modelSanPham->getSanPhamByDanhMuc($idDanhMuc);
    $danhMucs = $this->modelDanhMuc->getAllDanhMuc();
    require_once 'views/shop.php';
   }
   public function sanPhamTheoDanhMuc($idDanhMuc)
   {
    $listSanPham = $this->modelSanPham->getSanPhamByDanhMuc($idDanhMuc);
    $danhMucs = $this->modelDanhMuc->getAllDanhMuc();
    require_once 'views/shop.php';
   }
} 