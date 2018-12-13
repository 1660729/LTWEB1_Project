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
    <title>Đơn hàng</title>
</head>
<body>
<div id="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
				</div>
				<div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <h2>Danh sách đơn hàng</h2>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!-- <li>
							<a class="btn btn-primary" href="order_add.php" role="button">
								<span class="glyphicon glyphicon-backward"></>
								Thêm mới
							</a>
						</li> -->
                    </ol>
				</div>
            
        <div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>User ID</th>
                            <th>Tổng giá</th>
                            <th>Loại giao hàng</th>
                            <th>Tình trạng</th>
                            <th>Ngày tạo</th>
                            <th>Ngày dự kiến GH</th>
                            <th>Địa chỉ nhận hàng</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "select * from dathang order by dathang.NgayTao desc";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["ID"] ?></td>
								<td><?= $row["UserId"] ?></td>
                                <td><?= $row["TongGia"] ?></td>
								<td><?= $row["LoaiGiaoHang"] ?></td>
                                <td><?= $row["TinhTrang"] ?></td>
								<td><?= $row["NgayTao"] ?></td>
                                <td><?= $row["NgayDuKienGiaoHang"] ?></td>
								<td><?= $row["DiaChiNhanHangId"] ?></td>
								<td class="text-right">
									<a class="btn btn-default btn-xs" href="order_edit.php?id=<?= $row["ID"] ?>" role="button">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
									<a class="btn btn-danger btn-xs" href="order_delete.php?id=<?= $row["ID"] ?>" role="button">
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
</body>
</html>

<?php require_once("modules/header.php") ?>
                
               