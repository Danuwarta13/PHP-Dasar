<?php 
// 1.Pengulangan
// For
// While
// Do.. While
// ForEach : Pengulangan khusus Array

// Menggunakan For
for ($i=0; $i < 5; $i++) { 
    echo " Hello Word! $i menggunakan For <br>";
}

// Menggunakan While
$a = 0;
while ($a <= 10) {
    echo " Hellw Word $a menggunakan While <br> ";
    $a++;
}

// Menggunakan Do While : Pengulangan minimal 1 kali / dijalankan terlebih dahulu baru baru dicek
$b = 11;
do {
    echo " Hello Word $b Menggunakan Do While <br>";
    $b++;
} while ($b <= 10);
?>