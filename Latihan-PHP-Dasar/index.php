<?php
// menghubngkan ke functions.php
require 'functions.php';

// menampilkan semua data
$kuliner = query("SELECT * FROM kuliner");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan - PHP</title>
</head>

<body>
    <h1>Daftar Kuliner</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1 ?>
            <?php foreach ($kuliner as $k) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $k["nama"] ?></td>
                <td><?= $k["harga"] ?></td>
                <td><?= $k["rating"] ?></td>
            </tr>
            <?php $id++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>