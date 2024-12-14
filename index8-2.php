<?php 
$mahasiswa = [
    ["Galih Januar", "002202008", "Rekayasa Perangkat Lunak", "galihjanuar@gmail.com"],
    ["Evan Bagus", "002201009", "Rekayasa Perangkat Lunak", "evanbagus@gmail.com"],
    ["Jananta Dhafine", "0022010010", "Rekayasa Perangkat Lunak", "janantadhafine@gmail.com"]
];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Galih Januar",
    "nrp" => "002202008",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "galijanuar@gmail.com",
    "gambar" => "galih php.jpg"
    ],
    [
    "nama" => "Evan Bagus",
    "nrp" => "002202009",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "evanbagus@gmail.com",
    "gambar" => "evan php.jpg"
    ],
    [
    "nama" => "Jananta Dhafine",
    "nrp" => "0022020010",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "janantaDhafine@gmail.com",
    "gambar" => "jananta php.jpg"
    ],

];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>