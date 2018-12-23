<?php
    session_start();
   $IDND=$_SESSION["current_user"]->Quyen;
  $kt=intval($IDND);
  if($IDND==1)
  {
  $page="layout";


  require_once($page.'.php');
  }
  else
  {
    echo("<script> alert('Ban khong duoc phep truy cap vao day');  window.location.href = '../index.php'; </script>");
  }

  

?>