<?php

session_start(); // Memulai session
$_SESSION = []; // Mengosongkan session
session_unset(); // Menghapus semua variabel session
session_destroy(); // Menghancurkan session / menghapus session

setcookie('id', '', time() - 3600); // Menghapus cookie id
setcookie('key', '', time() - 3600); // Menghapus cookie key

// Mengembalikan ke halaman Login
header("Location: login.php");
exit; // Menghentikan eksekusi script setelah header