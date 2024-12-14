<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

//Standart Output
// echo. print
// print_r
// var_dump

print_r("Galih Januar Dwi Arianto");
var_dump("Galih Januar Dwi Arianto");

// Penulisan Sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan TipeData
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

$nama="Galih";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang Galih</h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    <h1>Good Choice <?php echo $nama; ?></h1>


    
</body>
</html>