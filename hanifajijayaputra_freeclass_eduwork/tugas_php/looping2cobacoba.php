<form>
	<table border="1" cellspacing="0">
			<tr>
				<th bgcolor="blue">No</th>
				<th bgcolor="blue">Nama</th>
				<th bgcolor="blue">Kelas</th>
			</tr>
	<?php  
		$no = 1;
		$mulai10 = 10;
		$mulai1 = 1;
		do {
			echo "<table $no<br>";
			$no++;
		} while ($no < 10);

		do {
			echo "Kelas $mulai10<br>";
			$mulai10--;
		} while ($mulai10 > 0);

		do {
			echo "Kelas $mulai1<br>";
			$mulai1++;
		} while ($mulai1 < 10);
	?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo "Nama ke $mulai1"; ?></td>
				<td><?php echo "Kelas $mulai10"; ?></td>
			</tr>
	</table>
</form>