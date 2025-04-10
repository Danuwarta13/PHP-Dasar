<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// Element pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index yang dimulai dari 0

// Membuat Array

// Cara lamaa
$hari = array("senin", "selasa", "rabu", "kamis");

// Cara baru
$bulan = ["Januari","Februari"," Marret","April"];

// Contoh Array
$arr1= [123,"empat",true];

// Menampilkan Array
// var_dump() / print_r()
echo "Menampilkan array menggunkana var_dump()";
echo "<br>";
var_dump($hari);
echo "<br>";
echo "<br>";
echo "Menampilkan array menggunakan print_r()";
echo "<br>";
print_r($bulan);
echo "<br>";
echo "<br>";

// Menampilkan 1 elemnt pada Array
echo "Menampilkan 1 element pada array";
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[3];
echo "<br>";
echo "<br>";

// Menambahkan element baru pada Array
var_dump($hari);
$hari[] = "jum'at";
$hari[] = "sabtu";
echo "<br>";
var_dump($hari);







?>