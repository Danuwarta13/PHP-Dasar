<?php 
    require 'functions.php';
    $film =  query("SELECT * FROM film");    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Film</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Sutradara</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Poster</th>
            <th>Aksi</th>
        </tr>

        <?php $id = 1 ?>
        <?php foreach ($film as $f) :?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $f["judul"] ?></td>
            <td><?= $f["sutradara"] ?></td>
            <td><?= $f["tahun"] ?></td>
            <td><?= $f["genre"] ?></td>
            <td>
                <img src="img/<?=$f["poster"] ?>" alt="" width="50">
            </td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $id++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>