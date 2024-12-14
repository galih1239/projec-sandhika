<?php 
$mahasiswa = [
    ["Galih Januar", "002201008", "Rekayasa Perangkat Lunak", "galihjanuar@gmail.com"],
    ["Evan Bagus", "002201009", "Rekayasa Perangkat Lunak", "evanbagus@gmail.com"],
    ["Jananta Dhafine", "0022010010", "Rekayasa Perangkat Lunak", "janantadhafine@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>