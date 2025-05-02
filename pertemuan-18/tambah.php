<?php

session_start(); //Memulai session

// mengecek apakah user sudah Login atau belum
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// include file functions.php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // var_dump($_POST); // untuk menampilkan isi dari $_POST
    // var_dump($_FILES); // untuk menampilkan isi dari $_FILES
    // die; // untuk menghentikan eksekusi program

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Film</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/styleForm.css">
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h1><i class="fas fa-film"></i> Add New Film</h1>
            <p>Fill in the details below to add a new film to the database</p>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class=" form-group">
                <label for="judul">Title</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter film title"
                    autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="sutradara">Director</label>
                <input type="text" name="sutradara" id="sutradara" class="form-control"
                    placeholder="Enter director's name" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="tahun">Year</label>
                <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Enter release year"
                    autocomplete="off" min="1900" max="<?= date('Y') + 5 ?>" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="genre" class="form-control"
                    placeholder="Enter genre (comma separated)" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <!-- <input type="file" name="poster" id="poster" class="form-control" required> -->
                <div class="file-upload">
                    <label class="file-upload-btn">
                        <input type="file" name="poster" id="poster" class="file-upload-input" accept="image/*">
                        <div class="file-upload-text">
                            <i class="fas fa-cloud-upload-alt"></i>
                            Click to upload or drag and drop
                            <div id="file-name" style="margin-top: 10px; color: var(--primary);"></div>
                        </div>
                    </label>
                </div>
            </div>

            <button type="submit" name="submit" class="btn">
                <i class="fas fa-plus"></i> Add Film
            </button>
        </form>

        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Film List
        </a>
    </div>

    <script>
        // Show selected file name
        document.getElementById('poster').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'No file selected';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</body>

</html>