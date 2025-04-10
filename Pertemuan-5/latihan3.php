<?php 
    // Array multidimensi / Array didalam array
    // Array numerik
    $mahasiswa = [
        ["Rhinozzz", 210103104, "Teknik Informatika", "Rhinozz@ac.id"],
        ["Yanto", 213321123, "Teknik Mersin", "Yanto@ac.id"],
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- menggunakan foreach dan mengambil array -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NIM : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>


    <!-- Menggunakan dua foreach -->
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach ($mhs as $m) : ?>
        <li><?= $m ?></li>
        <?php endforeach ?>
    </ul>
    <?php endforeach; ?>
</body>

</html>