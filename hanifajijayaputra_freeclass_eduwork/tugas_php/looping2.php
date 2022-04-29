<?php
$no = 1;
$mulai10 = 10;
$mulai1 = 1;
echo "<table style='border: 1px solid black;'>";
echo "<tr><th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
	</tr>";
do {

echo "<tr><td>{$no}</td>
			<td>Nama Ke {$mulai1}</td>
			<td>Kelas {$mulai10}</td>
	</tr>";
$no++;
$mulai1++;
$mulai10--;
}while ($mulai1 <= 10);

echo "</table>";