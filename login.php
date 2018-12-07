<?php
require_once './lib/db.php';

	if(!isset($_SESSION["dang_nhap_chua"])) {
		$_SESSION["dang_nhap_chua"] = 0;
	}

	if (isset($_POST["btnLogin"])) {
    $username = $_POST["txtUserName"];
    $password = $_POST["txtPassword"];
		$enc_password = $password;//md5($password);

		$sql = "select * from taikhoan where NguoiDung = '$username' and MatKhau = '$enc_password'";
    $rs = load($sql);
		if ($rs->num_rows > 0) {
			$_SESSION["current_user"] = $rs->fetch_object();
			$_SESSION["dang_nhap_chua"] = 1;
			header("Location: index.php");
		} else {
      
		}
	}
  ob_end_flush();
?>
