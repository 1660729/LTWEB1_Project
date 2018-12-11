<?php
    $page="";

   
   
    if(isset($_GET["Page"]))
    {
      $page=$_GET["Page"];
    }
    else
    {

      $page="HienThiSanPham";
      //$page = "SanPhamBanChayNhat";
      //$page = "SanPhamXemNhieuNhat";
    }
    require_once("Layout.php");


?>