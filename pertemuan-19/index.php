<?php

session_start(); // memulai session

// mengecek apakah user sudah Login atau belum

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan ke functions,php
require 'functions.php';

// Menampilkan semua data film
// Menggunakan fungsi query untuk mengambil data dari database
$film = query("SELECT * FROM film");

// Jika tombol cari ditekan
if (isset($_POST["cari"])) {
    $film = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-film"></i> Film Management Dashboard</h1>
            <a href="tambah.php" class="btn btn-add"><i class="fas fa-plus"></i> Add New Film</a>
            <a href="logout.php" class="btn">Logout</a>
        </header>

        <div class="card">
            <form action="" method="post">
                <div class="search-bar">
                    <input type="text" name="keyword" id="keyword" placeholder="Search films..." autofocus
                        autocomplete="off">
                    <button type="submit" name="cari" id="tombol-cari"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <div class="table-responsive" id="container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Director</th>
                            <th>Year</th>
                            <th>Genre</th>
                            <th>Poster</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1 ?>
                        <?php foreach ($film as $f) : ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><strong><?= $f["judul"] ?></strong></td>
                            <td><?= $f["sutradara"] ?></td>
                            <td><?= $f["tahun"] ?></td>
                            <td>
                                <span class="status-badge badge-success"><?= $f["genre"] ?></span>
                            </td>
                            <td>
                                <img src="img/<?= $f["poster"] ?>" alt="<?= $f["judul"] ?>" class="poster-thumb">
                            </td>
                            <td class="action-btns">
                                <a href="ubah.php?id=<?= $f["id"] ?>" class="edit-btn"><i class="fas fa-edit"></i>
                                    Edit</a>
                                <a href="hapus.php?id=<?= $f["id"] ?>" onclick="return confirm('Yakin?');"
                                    class="delete-btn"><i class="fas fa-trash-alt"></i>
                                    Delete</a>
                            </td>
                        </tr>
                        <?php $id++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>