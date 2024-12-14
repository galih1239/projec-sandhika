<?php 
// function adalah singkatan dari potongan program atau baris-baris kode yang kita buat untuk mempermudah pada saat melakukan pemrograman
// jenis function ada 2 yaitu
// Built-in Function: fungsi yang sudah disediakan oleh php
// User-Defined Function: fungsi yang nantinya kita buat sendiri

// Date/Time
// time()
//date()
// mktime()
//strtotime()

// Date
// Untuk menampilkan tanggal dengan format tertentu
//echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang berlalu sejak 1 Januari 1970
echo time();
echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0);
//jam, menit, detik, bulan, tanggal, tahun
//echo  date("l", mktime(0,0,0,8,25,1985));

// strtotime
// echo date("l",strtotime("25 aug 1985"));

 


?>