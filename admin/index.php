<?php
    $page="";

   
   
    if(isset($_GET["Page"]))
    {
      $page=$_GET["Page"];
    }
    else
    {

      $page="HienThi";
      
    }
    
    require_once("LayOutQLy.php");


?>