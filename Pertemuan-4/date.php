<?php 
// Date 
// Untuk menampilkan tanggal dengan format tertentu
echo "Date";
echo "<br>";
echo date("l, d-M-Y"); // l = nama hari, d = tanggal, M = bulan, Y = tahun

echo "<br>";
echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970 00:00:00
echo "Time";
echo "<br>";
echo time();
echo "<br>";
echo "<br>";

echo date("l", time() - 60*60*24*100);


// Mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0);
//  jam, menit, detik, bulan, tanggal, tahun
echo "<br>";
echo "<br>";
echo "Hari Kelahira Rhinozzz ";
echo date('l', mktime(0,0,0,9,13,2003));


// Strtotime
// mengubah tanggal menjadi detik
// strtotime("string tanggal")
echo "<br>";
echo "<br>";
echo "Hari Kelahiran Culsss ";
echo date('l',strtotime("2 June 2002"));
?>