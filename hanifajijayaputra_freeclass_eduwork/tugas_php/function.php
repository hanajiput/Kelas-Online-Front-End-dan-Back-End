<?php 

echo "<h1 align='center'>Rumus Matematika</h1>";
 echo "<br/>";

	function bangun($angka1, $angka2, $angka3){
		$hasil = $angka1 * $angka2;
		$hasil2 = 0.5 * $angka1 * $angka2;
		$hasil3 = 0.5 * ($angka1 + $angka2) * $angka3;
		$hasil4 = 1/3 * $angka1 * $angka2;
		$hasil5 = $angka1 * $angka2 * $angka3;
		echo "<h3 align='center'>Luas Persegi <br> $angka1 x $angka2 = $hasil <hr></h3>";
		echo "<h3 align='center'>Luas Persegi Panjang <br> $angka1 x $angka2 = $hasil <hr></h3>";
		echo "<h3 align='center'>Luas Jajar Genjang <br> $angka1 x $angka2 = $hasil <hr></h3>";
		echo "<h3 align='center'>Luas Segitiga <br> 1/2 x $angka1 x $angka2 = $hasil2 <hr></h3>";
		echo "<h3 align='center'>Luas Trapesium <br> 1/2 x ($angka1 + $angka2) x $angka3 = $hasil3 <hr></h3>";
		echo "<h3 align='center'>Volume Limas <br> 1/3 x $angka1 x $angka2 = $hasil4 <hr></h3>";
		echo "<h3 align='center'>Volume Kubus <br> $angka1 x $angka2 x $angka3 = $hasil5 <hr></h3>";
		echo "<h3 align='center'>Volume Balok <br> $angka1 x $angka2 x $angka3 = $hasil5 <hr></h3>";
	}
	bangun(4, 3, 9);
?>