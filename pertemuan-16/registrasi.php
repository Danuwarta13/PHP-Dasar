<?php
// hubungkan ke file functions.php
require 'functions.php';

// cek apakah tombol register sudah ditekan atau belum
if (isset($_POST["register"])) {

    // cek apakah registrasi berhasil atau tidak
    if (registrasi($_POST) > 0) {
        echo "
                <script>
                    alert('username berhasil ditambahkan!');
                </script
            ";
    } else {
        mysqli_errno($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Usernmae :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>

</html>