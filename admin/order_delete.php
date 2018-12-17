<?php

require_once './lib/db.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "delete from dathang where ID = $id";
	write($sql);
	header('Location: order.php');
}