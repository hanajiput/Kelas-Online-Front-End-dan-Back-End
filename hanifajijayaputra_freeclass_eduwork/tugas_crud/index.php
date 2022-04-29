<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Transaksi</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

	<?php  
		include_once("connection.php");
		$transaksis = mysqli_query($conn, "SELECT * FROM transaksi
										LEFT JOIN barang ON transaksi.id_barang = barang.id_barang
										ORDER BY id_transaksi ASC");
	?>

	<div class="container">

		<div class="row" style="margin: 50px;">
			<div class="col-md-12 text-center">Data Transaksi</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<a href="add.php" class="btn btn-primary">Tambah Transaksi</a>
			</div>

				<div class="col-md-12"> 
					<table class="table table-bordered">
						<thead>
							<tr>
								<td class="text-center">ID Transaksi</td>
								<td class="text-center">Nama Barang</td>
								<td class="text-center">ID Pembeli</td>
								<td class="text-center">Tanggal</td>
								<td class="text-center">Keterangan</td>
								<td class="text-center">Action</td>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($transaksi = mysqli_fetch_array($transaksis)) {
									echo "
										<tr>
											<td>".$transaksi['id_transaksi']."</td>
											<td>".$transaksi['nama_barang']."</td>
											<td>".$transaksi['id_pembeli']."</td>
											<td>".$transaksi['tanggal']."</td>
											<td>".$transaksi['keterangan']."</td>
											<td>
												<a href='edit.php?id_transaksi=".$transaksi['id_transaksi']."' class='btn btn-warning'>Edit</a>
												<a href='delete.php?id_transaksi=".$transaksi['id_transaksi']."' class='btn btn-danger'>Delete</a>
											</td>
										</tr>
									";
								}
								
							?>
						</tbody>
					</table>
				</div>
		</div>
	</div>

</body>
</html>