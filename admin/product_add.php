<?php require_once("modules/header.php") ?>
<?php
	require_once './lib/db.php';

	$show_alert = 0;
    $msg = "";
	if (isset($_POST["btnAdd"])) {
        $masp = $_REQUEST["txtMaSP"];
        $tensp = $_POST["txtTenSP"];
        $loaisp = $_POST["slLoaiSP"];
        $nhasanxuat = $_POST["slNhaSanXuat"];
        $xuatxu = $_POST["txtXuatXu"];
        $mota = $_POST["slMoTa"];
        $ngaytao = date("Y-m-d H:i:s");
        $soluong = $_POST["txtSoLuong"];
        $gia = $_POST["txtGia"];
        $luotxem = $_POST["txtLuotXem"];
        $tinhtrang = $_POST["txtTinhTrang"];
        $f = $_FILES['fuHinhAnh'];
        

        

        $sql = "insert into sanpham(MaSP, TenSP, LoaiSP, NhaSanXuatId, XuatXu, MoTa, NgayTao, SoLuong, HinhAnh, Gia, LuotXem, TinhTrang) 
                values('$masp', '$tensp', '$loaisp', '$nhasanxuat', '$xuatxu', '$mota', $ngaytao, '$soluong', '$gia', '$luotxem', '$tinhtrang')";
   
        $id = write($sql);

        
	    if ($f["error"] > 0) {

	    } else {

            //mkdir("../imgs/$id");

            $tmp_name = $f["tmp_name"];
            $name = $f["name"];
            $destination = "../img/$id" .$name;

            move_uploaded_file($tmp_name, $destination);
	    }
        
        
        
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
    <script type="text/javascript"> 
        function OpenUploader()
        {
            var width = 450, height = 200;
            var left = (screen.availWidth - width) / 2;
            var top = (screen.availHeight - height) / 2;
            
            //window.open("upload.php", "", "width=" + width + ", height=" + heith + ", top=" + top + ", left=" + left +", location=0, resizable=0");
            window.open("upload.php");
        }
    </script>
</head>
<body>  

            <div id="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
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
                        <label for="txtMaSP">Mã sản phẩm</label>
                    
                            <input type="text" class="form-control" id="txtMaSP" name="txtMaSP" placeholder="SP000" required>
                            
					</div>
					<div class="form-group">
						<label for="txtTenSP">Tên sản phẩm</label>
						<input type="text" class="form-control" id="txtTenSP" name="txtTenSP" placeholder="Quần áo" required>
					</div>
                    <div class="form-group">
                    <label for="slLoaiSP">Loại sản phẩm</label>
                        <select class="custom-select mr-sm-2" id="slLoaiSP" name="slLoaiSP" required>
                            <?php 
								$sql = "select * from danhmuc";
								$rs = load($sql);
								while ($row = $rs->fetch_assoc()) :
							?>
                            <option value="<?= $row["ID"] ?>"><?= $row["Ten"] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="slNhaSanXuat">Nhà sản xuất</label>
                        <select class="custom-select mr-sm-2" id="slNhaSanXuat" name="slNhaSanXuat" required>
                            <?php 
								$sql = "select * from nhasanxuat";
								$rs = load($sql);
								while ($row = $rs->fetch_assoc()) :
							?>
                            <option value="<?= $row["ID"] ?>"><?= $row["Ten"] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
						<label for="txtTenSP">Xuất xứ</label>
						<input type="text" class="form-control" id="txtXuatXu" name="txtXuatXu" placeholder="Tên nước" required>
					</div>
                    <div class="form-group">
                    <label for="slMoTa">Mô tả</label>
                        <select class="custom-select mr-sm-2" id="slMoTa" name="slMoTa" required>
                            <option selected>Choose...</option>
                            <option value="1">Nam</option>  
                            <option value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
						<label for="txtSoLuong">Số lượng</label>
						<input type="text" class="form-control" id="txtSoLuong" name="txtSoLuong" placeholder="0" required>
					</div>
                    <div class="form-group">
                        <label for="txtHinhAnh">Hình ảnh</label>
                        <input type="file" class="form-control-file" id="txtHinhAnh" name="fuHinhAnh" >
                        <!-- <input type="button"  id="btnUpload" name="btnUpload" value="..." onclick="OpenUploader();"> -->
                    </div>
                    <div class="form-group">
						<label for="txtGia">Giá</label>
						<input type="text" class="form-control" id="txtGia" name="txtGia" placeholder="100000"required>
                    </div>
                    <div class="form-group">
						<label for="txtLuotXem">Lượt xem</label>
						<input type="text" class="form-control" id="txtLuotXem" name="txtLuotXem" value="0" >
                    </div>
                    <div class="form-group">
						<label for="txtTinhTrang">Tình trạng</label>
						<input type="text" class="form-control" id="txtTinhTrang" name="txtTinhTrang" value="0" >
					</div>
                    
					<a class="btn btn-primary" href="product.php" role="button" title="Về thôi">
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
		    $('#txtTenSP').focus();
		});
	</script>
                
               
</body>
</html>

<?php require_once("modules/header.php") ?>