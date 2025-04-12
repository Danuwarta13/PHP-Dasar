<?php 
// Cek apakah tidak ada data di $_GET
if (!isset($_GET["judul"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["rating"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>

<body>
    <h1>Detail Film</h1>
    <ul>
        <li><?=$_GET["judul"]?></li>
        <li><?=$_GET["sutradara"]?></li>
        <li><?=$_GET["tahun"]?></li>
        <li><?=$_GET["genre"]?></li>
        <li><?=$_GET['rating']?></li>
    </ul>

    <a href="latihan1.php">Kembali ke daftar Film</a>
</body>

</html>