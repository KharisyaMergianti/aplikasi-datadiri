<?php
echo "
<marquee>
<h1>Kharisya Mergianti - Smkn 1 Subang</h1>

</marquee>
";

//variable
$nama = "Kharisya Mergianti";
$kelas = "XI RPL 2";
$nilai = 99.99;

echo "Nama : " . $nama;
echo "<br>";
echo "Kelas : " . $kelas;
echo "<br>";
echo "Nilai : $nilai ";
echo "<br><br>";

//Operator Jumlah
$angka1 = 5;
$angka2 = 10;

$hasil = $angka1 + $angka2;
echo "Hasil dari penjumlahan : $hasil";

// Rumus Luas Segitiga //
echo "<br><br>";
$alas = 8;
$tinggi = 20;

$rumus = 0.5 * $alas * $tinggi;
echo "Hasil rumus : $rumus";

// Rumus Luas Lingkaran //
echo "<br>";
$phi = 3.14;
$r = 7;
// luas ling : phi * r * r
$lingkaran = $phi * $r * $r;

echo "Hasil Luas Lingkaran : $lingkaran";

// Rumus Volume Balok 
echo "<br>";
$p = 10;
$l = 5;
$t = 10;
// V = p x l x t;
// p = 10, l = 5, t = 10;
$V = $p * $l * $t;
 echo "Hasil Volume Balok : $V";


?>