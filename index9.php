<?php
// variable Scope / lingkup variabel
$x = 10;

function tampilx() {
    $x = 20;
    echo $x;
}

tampilx();
echo "<br>";
echo $x;
?>

<?php
//SUPERGLOBALS
// variabel global milik php
// merupakan array associative

//$_GET
$_GET["nama"] = "Galih Januar";
$_GET["nrp"]  ="002202008";
var_dump($_GET);
?>

<?php 
 $GET= [
    [
"nama" => "Galih Januar",
"nrp"  => "002202008",
"jurusan" => "Rekayasa Perangkat Lunak",
"email" => "galihjanuargmail.com"
    ],
    [
"nama" => "Evan Bagus",
"nrp"  => "00202009",
"jurusan" => "Rekayasa Perangkat Lunak",
"email" => "evanbagus@gmail.com"
    ],
    ];

?>
!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $GET as $GET) : ?>  
        <li>
            <a href="latihan2.php?nama=<?= $GET ["nama"] ;
             ?> &nrp=<?=$GET["nrp"];?>&emai=<?= $GET["email"];?>
    </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>