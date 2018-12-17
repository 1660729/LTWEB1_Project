<?php require_once("modules/header.php") ?>
<?php
	require_once './lib/db.php';

	$show_alert = 0;

	if (!isset($_GET["id"])) {
		header('Location: order.php');
	}

    // cập nhật đơn đặt hàng
	if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtID"];
        $userid = $_POST["txtUserId"];
        $tonggia = $_POST["txtTongGia"];
        $loaigh = $_POST["txtLoaiGH"];
		$tinhtrang = $_POST["txtTinhTrang"];
		//$ngaytao = $_POST["txtNgayTao"];
        $ngaydukiengh = $_POST["txtNgayDKGH"];
        $diachinhanhang = $_POST["txtDiaChiNH"];

        $u_sql = "update dathang set UserId = '$userid', TongGia = '$tonggia', LoaiGiaoHang = '$loaigh', TinhTrang = '$tinhtrang', NgayDuKienGiaoHang = '$ngaydukiengh', DiaChiNhanHangId = '$diachinhanhang' where ID = $u_id";
		write($u_sql);
		$show_alert = 1;
	}

    // xóa đơn đặt hàng
	if (isset($_POST["btnDelete"])) {
		$d_id = $_POST["txtID"];
		$d_sql = "delete from dathang where ID = $d_id";
		write($d_sql);
		header('Location: order.php');
	}

    // lấy giá trị tại từng dòng
	$id = $_GET["id"];
	$sql = "select * from dathang where ID = $id";
	$rs = load($sql);
	$User = "";
    $TongGia = "";
    $LoaiGH = "";
	$TinhTrang = "";
	//$NgayTao = "";
    $NgayDuKienGH = "";
    $DiaChiNhanHang = "";

    while ($row = $rs->fetch_assoc()) {
        $User = $row["UserId"];
        $TongGia = $row["TongGia"];
        $LoaiGH = $row["LoaiGiaoHang"];
		$TinhTrang = $row["TinhTrang"];
		//$NgayTao = $row["NgayTao"];
        $NgayDuKienGH = $row["NgayDuKienGiaoHang"];
        $DiaChiNhanHang = $row["DiaChiNhanHangId"];
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa đơn đặt hàng</title>
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
						<label for="txtID">ID</label>
						<input type="text" class="form-control" id="txtID" name="txtID" readonly value="<?= $id ?>">
					</div>
					<div class="form-group">
						<label for="txtUserId">UserId</label>
						<input type="text" class="form-control" id="txtUserId" name="txtUserId"  value="<?= $User ?>">
					</div>
                    <div class="form-group">
						<label for="txtTongGia">Tổng giá</label>
						<input type="text" class="form-control" id="txtTongGia" name="txtTongGia" value="<?= $TongGia ?>">
					</div>
                    <div class="form-group">
						<label for="txtLoaiGH">Loại giao hàng</label>
						<input type="text" class="form-control" id="txtLoaiGH" name="txtLoaiGH"  value="<?= $LoaiGH ?>">
					</div>
                    <div class="form-group">
						<label for="txtTinhTrang">Tình trạng</label>
						<input type="text" class="form-control" id="txtTinhTrang" name="txtTinhTrang"  value="<?= $TinhTrang ?>">
					</div>
					<!-- <div class="form-group">
						<label for="txtNgayTao">Ngày Tạo</label>
						<input type="text" class="form-control" id="txtNgayTao" name="txtNgayTao" readonly disabled  value="<?= $NgayTao ?>">
					</div> -->
                    <div class="form-group">
						<label for="txtNgayDKGH">Ngày dự kiến GH</label>
						<input type="text" class="form-control" id="txtNgayDKGH" name="txtNgayDKGH"  value="<?= $NgayDuKienGH ?>">
					</div>
                    <div class="form-group">
						<label for="txtDiaChiNH">Địa chỉ nhận hàng</label>
						<input type="text" class="form-control" id="txtDiaChiNH" name="txtDiaChiNH" value="<?= $DiaChiNhanHang ?>">
					</div>

					<a class="btn btn-primary" href="order.php" role="button" title="Về thôi">
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