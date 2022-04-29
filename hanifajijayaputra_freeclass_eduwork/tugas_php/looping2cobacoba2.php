<form>
	<table border="1" cellspacing="0">
			<tr>
				<th bgcolor="blue">No</th>
				<th bgcolor="blue">Nama</th>
				<th bgcolor="blue">Kelas</th>
			</tr>

	<?php  for ($no=1, $i=1, $a=1; $i<=10, $a<=10 ; 
			$i+=1, $a+=1) { ?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo "Nama ke $i"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>

	<?php $no++; } ?>

	</table>
</form>

