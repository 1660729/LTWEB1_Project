<?php
    $page="";

   
   
    if(isset($_GET["Page"]))
    {
      $page=$_GET["Page"];
      

        if(isset($_GET["Ma1"]))
        {
          $MaID=$_GET["Ma1"];
          $SolungSp=$_GET["Sluong"];
          
          $TongTien=$_GET["TongT"];
         require_once "SuLy.php";
         $UpdateGh=new Suly();
         $UpdateGh->UpdateGioHang($MaID,$SolungSp,$TongTien);

           
        }
    }
    else
    {

      $page="HienThiSanPham";
      
    }
    
    require_once("Layout.php");


?>