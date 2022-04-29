<?php 
    $a = 6;
    $b = 10;
    $d = 4;

    $c = $a * $b;
    echo "Luas Persegi Panjang"; echo "<br>";
    echo "Panjang x Lebar"; echo "<br>";
    echo " $a x $b = $c ";

    echo "<hr>";

    $c = $a * $b;
    echo "Luas Persegi"; echo "<br>";
    echo "Sisi x Sisi"; echo "<br>";
    echo " $a x $b = $c ";

    echo "<hr>";
 
    $c = 0.5 * $a * $b;
    echo "Luas Segitiga"; echo "<br>";
    echo "1/2 x Alas x Tinggi"; echo "<br>";
    echo "1/2 x $a x $b = $c ";

    echo "<hr>";

    $c = $a * $b;
    echo "Luas Jajar Genjang"; echo "<br>";
    echo "Alas x Tinggi"; echo "<br>";
    echo " $a x $b = $c ";

    echo "<hr>";

    $c = 0.5 * ($a + $b) * $d;
    echo "Luas Trapesium"; echo "<br>";
    echo "1/2 x (a + b) x t"; echo "<br>";
    echo "1/2 x ($a + $b) x $d = $c ";
 ?>