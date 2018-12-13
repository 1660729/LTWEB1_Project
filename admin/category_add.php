<?php require_once("modules/header.php") ?>
<?php
	require_once './lib/db.php';

	$show_alert = 0;

	if (isset($_POST["btnAdd"])) {
		$name = $_POST["txtCatName"];
		$sql = "insert into danhmuc(Ten) values('$name')";
		write($sql);

		$show_alert = 1;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Thêm danh mục</title>
</head>
<body>

            <div id="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
				</div>

				
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
				<?php if ($show_alert == 1) : ?>
					<div class="alert alert-success" role="alert">
						<strong>Well done!</strong> You successfully read this important alert message.
					</div>
				<?php endif; ?>
				<form method="post" action="" name="frmAdd">
					<div class="form-group">
						<label for="txtCatName">Tên danh mục</label>
						<input type="text" class="form-control" id="txtCatName" name="txtCatName" placeholder="Quần áo" required>
					</div>
					<a class="btn btn-primary" href="category.php" role="button" title="Về thôi">
						<span class="glyphicon glyphicon-backward"></span>
						Quay lại
					</a>
					<button type="submit" class="btn btn-success" name="btnAdd">
						<span class="glyphicon glyphicon-check"></span>
						Thêm mới
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