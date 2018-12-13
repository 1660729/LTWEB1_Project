<?php require_once("modules/header.php") ?>
<?php
	require_once "./lib/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh mục</title>
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
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <h2>Danh sách sản phẩm</h2>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li>
							<a class="btn btn-primary" href="product_add.php" role="button">
								<span class="glyphicon glyphicon-backward"></>
								Thêm mới
							</a>
						</li>
                    </ol>
				</div>
        
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Sản phẩm
            </div>
        <div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Nhà sản xuất Id</th>
                            <th>Xuất xứ</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Lượt xem</th>
                            <th>Tình trạng</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "select * from sanpham";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["ID"] ?></td>
								<td><?= $row["TenSP"] ?></td>
                                <td><?= $row["LoaiSP"] ?></td>
								<td><?= $row["NhaSanXuatId"] ?></td>
                                <td><?= $row["XuatXu"] ?></td>
								<td><?= $row["MoTa"] ?></td>
                                <td><?= $row["SoLuong"] ?></td>
								<td><?= $row["HinhAnh"] ?></td>
                                <td><?= $row["Gia"] ?></td>
								<td><?= $row["LuotXem"] ?></td>
                                <td><?= $row["TinhTrang"] ?></td>
					
								<td class="text-right">
									<a class="btn btn-default btn-xs" href="product_edit.php?id=<?= $row["ID"] ?>" role="button">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
									<a class="btn btn-danger btn-xs" href="product_delete.php?id=<?= $row["ID"] ?>" role="button">
										<span class="glyphicon glyphicon-remove"></span>
										Xóa
									</a>
								</td>
							</tr>
					<?php
						endwhile;
					?>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</body>
</html>

<?php require_once("modules/header.php") ?>
                
               