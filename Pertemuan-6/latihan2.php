<?php 
//      Array Numerik
//      Array yang indexnya berurutan dari 0,1,2,3 dst
//     $mahasiswa = [
//         ["Rhinozz","210103104","Rhinozz@ac.id","Teknik Informatika"],
//         ["Yanto","1233214","Yanto@ac.id","Teknik Kendaran Ringan"],
// ];

    // Array Associative
    // Definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            "nama" => "Rhinozz",
            "nim" => "210103104",
            "email" => "Rhinozz@ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "hinata.jpg"
        ],
        [
        "nama" => "Yanto",
        "nim" => "1233214",
        "email" => "Yanto@ac.id",
        "jurusan" => "Teknik Kendaran Ringan",
        "gambar" => "kageyama.jpg"
        ],
        
        
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
    .gambar {
        list-style: none;
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        <li class="gambar"><img src="img/<?= $mhs["gambar"] ?>" alt="" width="100"></li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>Nim : <?= $mhs["nim"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>