<?php
// syarat untuk menggunakan session
session_start();

// memanggil session yang sudah dibuat di halaman 1
echo $_SESSION["nama"];
