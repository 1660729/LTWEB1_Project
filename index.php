<?php
    $page="";

    if(isset($_GET["Page"]))
    {
      $page=$_GET["Page"];
    }
    else
    {
      $page="SanPham";

    }

    require_once("Layout.php");



?>