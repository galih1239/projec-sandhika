<?php 

//array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key nya adalah index, yang dimulai dari 0
$nama = "Galih";

$hari1 = "senin";
$hari2 = "selasa";

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
//var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilakn 1 elemen pada array
echo $arrl[0];
echo "<br>";
echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>