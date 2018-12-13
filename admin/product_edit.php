<?php require_once("modules/header.php") ?>
<?php
	require_once './lib/db.php';

	$show_alert = 0;

	if (!isset($_GET["id"])) {
		header('Location: product.php');
	}

	if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtID"];
        // $u_name = $_POST["txtCatName"];
        $tensp = $_POST["txtTenSP"];
        $loaisp = $_POST["slLoaiSP"];
        $nhasanxuat = $_POST["slNhaSanXuat"];
        $xuatxu = $_POST["txtXuatXu"];
        $mota = $_POST["slMoTa"];
        $hinhanh = $_POST["txtHinhAnh"];
        $gia = $_POST["txtGia"];

		$u_sql = "update sanpham set TenSP = '$tensp', LoaiSP = '$loaisp', NhaSanXuatId = '$nhasanxuat', XuatXu = '$xuatxu', MoTa = '$mota', HinhAnh = '$hinhanh', Gia = '$gia' where ID = $u_id";
		write($u_sql);
		$show_alert = 1;
	}

	if (isset($_POST["btnDelete"])) {
		$d_id = $_POST["txtID"];
		$d_sql = "delete from sanpham where ID = $d_id";
		write($d_sql);
		header('Location: product.php');
	}


	$id = $_GET["id"];
	$sql = "select * from sanpham where ID = $id";
	$rs = load($sql);
	$TenSP = "";
	$LoaiSP = "";
	$NSXID = "";
	$XuatXu = "";
	$MoTa = "";
	$HinhAnh = "";
	$Gia = "";

	while ($row = $rs->fetch_assoc()) {
        $TenSP = $row["TenSP"];
        $LoaiSP = $row["LoaiSP"];
        $NSXID = $row["NhaSanXuatId"];
        $XuatXu = $row["XuatXu"];
        $MoTa = $row["MoTa"];
        $HinhAnh = $row["HinhAnh"];
        $Gia = $row["Gia"];
	}


	// if (isset($_POST["btnAdd"])) {
	// 	$name = $_POST["txtCatName"];
	// 	$sql = "insert into categories(CatName) values('$name')";
	// 	write($sql);

	// 	$show_alert = 1;
	// }
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
						<label for="txtID">ID</label>
						<input type="text" class="form-control" id="txtID" name="txtID" readonly value="<?= $id ?>">
					</div>
                <div class="form-group">
						<label for="txtTenSP">Tên sản phẩm</label>
						<input type="text" class="form-control" id="txtTenSP" name="txtTenSP" placeholder="Quần áo" value="<?= $TenSP ?>">
					</div>
                    <div class="form-group">
                    <label for="slLoaiSP">Loại sản phẩm</label>
                        <select class="custom-select mr-sm-2" id="slLoaiSP" name="slLoaiSP" value="<?= $LoaiSP ?>">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="slNhaSanXuat">Nhà sản xuất</label>
                        <select class="custom-select mr-sm-2" id="slNhaSanXuat" name="slNhaSanXuat" value="<?= $NSXID ?>">
                            <option selected>Choose...</option>
                            <option value="1">1 (VietNam)</option>
                            <option value="2">2 (USA)</option>
                            <option value="3">3 (ThaiLan)</option>
                            <option value="3">4 (QuangChau)</option>
                        </select>
                    </div>
                    <div class="form-group">
						<label for="txtTenSP">Xuất xứ</label>
						<input type="text" class="form-control" id="txtXuatXu" name="txtXuatXu" placeholder="Tên nước" value="<?= $XuatXu ?>">
					</div>
                    <div class="form-group">
                    <label for="slMoTa">Mô tả</label>
                        <select class="custom-select mr-sm-2" id="slMoTa" name="slMoTa" value="<?= $MoTa ?>">
                            <option selected>Choose...</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtHinhAnh">Hình ảnh</label>
                        <input type="file" class="form-control-file" id="txtHinhAnh" name="txtHinhAnh" value="<?= $HinhAnh ?>">
                    </div>
                    <div class="form-group">
						<label for="txtGia">Giá</label>
						<input type="text" class="form-control" id="txtGia" name="txtGia" placeholder="Giá sản phẩm" value="<?= $Gia ?>">
					</div>
					<a class="btn btn-primary" href="product.php" role="button" title="Về thôi">
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