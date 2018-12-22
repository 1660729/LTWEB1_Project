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
		<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Đơn hàng
            </div> 
        <div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
						// $sql = "select * from dathang order by dathang.NgayTao desc";
						// $rs = load($sql);
						// while ($row = $rs->fetch_assoc()) :
					?>
					<?php
						// giới hạn mỗi page 8 dòng
						$limit = 8;

						$current_page = 1;
						if (isset($_GET["page"])) {
							$current_page = $_GET["page"];
						}

						$next_page = $current_page + 1; // tiến tới trang kế tiếp
						$prev_page = $current_page - 1; // lùi lại trang trước đó

						// đếm số dòng của đặt hàng
						$c_sql = "select count(*) as num_rows from dathang";
						$c_rs = load($c_sql);
						$c_row = $c_rs->fetch_assoc();
						$num_rows = $c_row["num_rows"];
						$num_pages = ceil($num_rows / $limit);

						if ($current_page < 1 || $current_page > $num_pages) {
							$current_page = 1;
						}

						// $offset = 0;
						$offset = ($current_page - 1) * $limit;
						// đơn đặt hàng giảm dân theo ngày đặt
						$sql = "select * from dathang order by dathang.NgayTao desc limit $offset, $limit";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["ID"] ?></td>
								<td><?= $row["UserId"] ?></td>
                                <td><?= $row["TongGia"] ?></td>
								<td><?= $row["LoaiGiaoHang"] ?></td>
                                <td class="tinhtrang"><?= $row["TinhTrang"] ?></td>
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
					<tfoot>
						<td colspan="4" class="text-center" >
						<!-- lùi tại trang trước đó -->
						<?php if ($prev_page > 0) : ?>
							<a class="btn btn-primary" href="?page=<?= $prev_page ?>" role="button">
								<span class="glyphicon glyphicon-arrow-left"></span>
								Prev
							</a>
						<?php endif; ?>
						<!-- tiến tới trang tiếp theo -->
						<?php if ($next_page <= $num_pages) : ?>
							<a class="btn btn-primary" href="?page=<?= $next_page ?>" role="button">
								<span class="glyphicon glyphicon-arrow-right"></span>
								Next
							</a>
						<?php endif; ?>
						</td>
					</tfoot>
				</table>

				<ul class="pagination">
					<li class="disabled">
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">«</span>
						</a>
					</li>
					<!-- số trang được phân ra sau khi để mỗi page 8 dòng -->
					<?php for ($i = 1; $i <= $num_pages; $i++) : ?>
						<li class="<?php if ($i == $current_page) echo 'active' ?>">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="?page=<?= $i ?>"><?= $i ?></a>
							
						</li>
					<?php endfor; ?>

					
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<script>
		var elements = document.getElementsByClassName("tinhtrang");
		for(var i = 0; i < elements.length; i++)
		{
			if(elements[i].innerHTML == "1")
			{
				elements[i].style.background = "blue";
			}
			if(elements[i].innerHTML == "0") 
			{
				elements[i].style.background = "red";
			}
		}
	</script>

</body>
</html>

<?php require_once("modules/header.php") ?>

