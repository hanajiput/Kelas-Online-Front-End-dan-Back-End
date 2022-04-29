<?php  
 
 $getdata = file_get_contents('data.json');
$data = json_decode($getdata, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Daftar Nilai ada ".count($data)." Oramg</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
 <table border="1">
  <tr>
   <th>No</th>
   <th>Tahun</th>
   <th>Jenis Lomba</th>
   <th>Juara</th>
   <th>Nama</th>
   <th>Sekolah</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['nama']."</td>";
    print "<td>".$data[$a]['kelas']."</td>";
    print "<td>".$data[$a]['alamat']."</td>";
    print "<td>".$data[$a]['tanggal_lahir']."</td>";
    print "<td>".$data[$a]['nilai']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>