<?php  
	$servername = "localhost";
	$database = "penjualan_barang";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password, $database);

//	if (!$conn) {
//		die("Koneksi Gagal: " . mysql_connect_error());
//	}

//	echo "Koneksi Berhasil";
//	mysqli_close($conn);

//	$sql = "SELECT * FROM barang";
//	$result = $conn->query($sql);
//
//	if ($result->num_rows > 0) {
//		while ($row = $result->fetch_assoc()) {
//			echo "Nama Barang: " . $row["nama_barang"]. "<br>";
//		}
//	}else{
//		echo "0 ditemukan";
//	}
//	$conn->close();
?>