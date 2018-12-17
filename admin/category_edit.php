<?php require_once("modules/header.php") ?>
<?php
	require_once './lib/db.php';

	$show_alert = 0;

	if (!isset($_GET["id"])) {
		header('Location: category.php');
	}

	// cập nhật tên danh mục
	if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtCatID"];
		$u_name = $_POST["txtCatName"];
		$u_sql = "update danhmuc set Ten = '$u_name' where ID = $u_id";
		write($u_sql);
		$show_alert = 1;
	}

	// xóa tên danh mục
	if (isset($_POST["btnDelete"])) {
		$d_id = $_POST["txtCatID"];
		$d_sql = "delete from danhmuc where ID = $d_id";
		write($d_sql);
		header('Location: category.php');
	}


	$id = $_GET["id"];
	$sql = "select * from danhmuc where ID = $id";
	$rs = load($sql);
	$name = "";
	while ($row = $rs->fetch_assoc()) {
		$name = $row["Ten"];
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa danh mục</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
			<?php if ($show_alert == 1) : ?>
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
			<?php endif; ?>
				<form method="post" action="" name="frmEdit">
					<div class="form-group">
						<br>
						<label for="txtCatID">ID</label>
						<input type="text" class="form-control" id="txtCatID" name="txtCatID" readonly value="<?= $id ?>">
					</div>
					<div class="form-group">
						<label for="txtCatName">Tên danh mục</label>
						<input type="text" class="form-control" id="txtCatName" name="txtCatName" placeholder="Quần áo" value="<?= $name ?>">
					</div>
					<a class="btn btn-primary" href="category.php" role="button" title="Về thôi">
						<span class="glyphicon glyphicon-backward"></span>
						Quay về
					</a>
					<button type="submit" class="btn btn-success" name="btnUpdate">
						<span class="glyphicon glyphicon-check"></span>
						Chỉnh sửa
					</button>
					<button type="submit" class="btn btn-danger" name="btnDelete">
						<span class="glyphicon glyphicon-remove"></span>
						Xoá luôn
					</button>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
		    $('#txtCatName').focus();
		});
	</script>
</body>
</html>

<?php require_once("modules/header.php") ?>