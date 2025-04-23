<?php

//menghubungkan ke file functions.php
require 'functions.php';


//cek apakah tombol login sudah ditekan atau belum
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // mengambil data dari tabel user yang sesuai dengan username lalu disimpan ke dalam variabel $result
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    // jika username ada di dalam tabel user, maka mysqli_num_rows($result) akan bernilai 1
    if (mysqli_num_rows($result) === 1) {

        // cek password
        // ambil data dari tabel user yang sesuai dengan username lalu disimpan ke dalam variabel $row
        // mysqli_fetch_assoc($result) akan mengembalikan array asosiatif dari hasil query
        $row = mysqli_fetch_assoc($result);
        // password_verify() digunakan untuk memverifikasi password yang diinputkan dengan password yang ada di database
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }

    $erorr = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($erorr)) : ?>
    <p style="color:red; font-style:italic;">Username / Password Salah!!!</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>