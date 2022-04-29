<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

	<?php  
		include_once("connection.php");
		$array_barang = mysqli_query($conn, "SELECT * FROM barang");
	?>
	
	<div class="container">
		
		<div class="row" style="margin: 50px;">
			<div class="col-md-12 text-center">Tambah Transaksi</div>
		</div>

			<div class="row">
				<div class="col-md-12">
					<form action="add.php" method="post" name="form1">
						<table width="100%" class="table table-bordered" cellpadding="10" border="0">
							<tr>
								<td>ID Transaksi</td>
								<td><input type="text" class="form-control" name="id_transaksi"></td>
							</tr>
							<tr>
								<td>Nama Barang</td>
								<td><select class="form-control" name="id_barang">
										<?php  
											while ($barangs = mysqli_fetch_array($array_barang)) {
												echo "<option value=".$barangs['id_barang'].">".$barangs['nama_barang']."</option>";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>ID Pembeli</td>
								<td><input type="text" class="form-control" name="id_pembeli"></td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td><input type="date" class="form-control" name="tanggal"></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td><input type="text" class="form-control" name="keterangan"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" class="form-control btn btn-primary" name="Submit" value="Add"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
	</div>
</body>
</html>

<?php  
	if (isset($_POST['Submit'])) {
		$id_transaksi = $_POST['id_transaksi'];
		$id_barang = $_POST['id_barang'];
		$id_pembeli = $_POST['id_pembeli'];
		$tanggal = $_POST['tanggal'];
		$keterangan = $_POST['keterangan'];

		$insert = mysqli_query($conn, "INSERT INTO `transaksi`(`id_transaksi`, `id_barang`, `id_pembeli`, 
			`tanggal`, `keterangan`) VALUES('$id_transaksi', '$id_barang', '$id_pembeli', '$tanggal', 
			'$keterangan'); ");

		header("Location:index.php");
	}
?>