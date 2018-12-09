<?php
    $page="";

   
   
    if(isset($_GET["Page"]))
    {
      $page=$_GET["Page"];
    }
    else
    {

      $page="HienThiSanPham";
    }
    require_once("Layout.php");


?>