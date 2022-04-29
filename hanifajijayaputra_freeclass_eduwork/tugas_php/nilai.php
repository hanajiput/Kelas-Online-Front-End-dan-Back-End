<?php  
	$nilai = 4;
	switch ($nilai) {
		case '1':
			echo "Nilai A (90-100)";
			break;
		case '2':
			echo "Nilai B (80-90)";
			break;
		case '3':
			echo "Nilai C (70-80)";
			break;
		case '4':
			echo "Nilai D (0-70)";
			break;
		default:
			echo "Tidak ditemukan";
			break;
	}
?>