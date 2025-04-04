<?php
    // Pertemuan 2 - PHP Dasar
    
    // Syntax Dasar PHP

    // Standar Output
    // 1. echo, print
    // 2. print_r, var_dump

    echo "Rhinozz ini menggunakan echo <br>";
    print "Rhinozz ini menggunakan print <br>";
    print_r("Rhinozz ini menggunakan print_r <br>"); 
    var_dump("Rhinozzz ini menggunakan var_dump"); 

    // Penulisan Sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // Variable dan Tipe Data
    // Variable
    // tidak boleh diawali dengan angka namun boleh mengandung angka
    
    $nama = "Rhinozzz Cuyy";
    // echo "hallo Nama Saya $nama"; // hallo Nama Saya Rhinozzz Cuyy


//////////////////////////////////////////////////////////////////////////////////////

    // Operator
    
    // 1. Aritmatika
    // +, -, *, /, %
    
    $x =10;
    $y = 20;
    // echo $y *  $x; // 200

    // 2. Penggabungan String
    // Penggabungan String / Concatenation / Concat
    // . (titik)
    
    $nama_depan = "Rhinozzz";
    $nama_belakang = "Cuyy";
    // echo $nama_depan . " " . $nama_belakang; // Rhinozzz Cuyy
    // echo "Nama saya adalah $nama_depan $nama_belakang"; // Nama saya adalah Rhinozzz Cuyy

    // 3. Assignment
    // =, +=, -=, *=, /=, %=, .=
    
    $x = 1;
    $x += 5; // $x = $x + 5;
    // echo $x; // 6

    $nama = "Rhinozzz";
    $nama .= " ";
    $nama .= "Cuyy";
    // echo $nama; // Rhinozzz Cuyy

    // 4. Perbandingan
    // <, >, <=, >=, ==, !=
    var_dump(1 == '1'); // true

    // 5. Idetitas
    //  ===, !==
    var_dump(1 === '1'); // false
    
    // 6.Logika
    // &&, ||, !
    // Perbedaan && dan || kalo && Harus true semua baru true, kalo || salah satu true sudah true
    $a = 40;
    var_dump($a < 30 || $a % 2 == 0) // true
?>