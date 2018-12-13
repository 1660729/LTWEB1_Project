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
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
				</div>
				<div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <h2>Danh sách danh mục</h2>
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li>
							<a class="btn btn-primary" href="category_add.php" role="button">
								<span class="glyphicon glyphicon-backward"></>
								Thêm mới
							</a>
						</li>
                    </ol>
				</div>
            
                <div class="row">
			<div class="col-md-6">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên Danh Mục</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "select * from danhmuc";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
					?>
							<tr>
								<td><?= $row["ID"] ?></td>
								<td><?= $row["Ten"] ?></td>
								<td class="text-right">
									<a class="btn btn-default btn-xs" href="category_edit.php?id=<?= $row["ID"] ?>" role="button">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
									<a class="btn btn-danger btn-xs" href="category_delete.php?id=<?= $row["ID"] ?>" role="button">
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
                
               