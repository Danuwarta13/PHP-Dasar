<?php

session_start(); // Memulai session
$_SESSION = []; // Mengosongkan session
session_unset(); // Menghapus semua variabel session
session_destroy(); // Menghancurkan session / menghapus session

// Mengembalikan ke halaman Login
header("Location: login.php");
exit; // Menghentikan eksekusi script setelah header