<?php


  $page ="";
  if(isset($_GET["Page"]))
  {
    $page=$_GET["Page"];

  }
  else
  {
    $page="layout";
  }

  require_once($page.'.php');

?>