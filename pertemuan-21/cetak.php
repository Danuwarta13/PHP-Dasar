<?php

require_once __DIR__ . '/vendor/autoload.php';

// Menghubungkan ke functions,php
require 'functions.php';

// Menampilkan semua data film
// Menggunakan fungsi query untuk mengambil data dari database
$film = query("SELECT * FROM film");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
    <title>PRINT</title>
</head>
<body>
    <h1>Data Film</h1>
    <div class="table-responsive" id="container">
                <table >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Director</th>
                            <th>Year</th>
                            <th>Genre</th>
                            <th>Poster</th>
                        </tr>
                    </thead>';
$i = 1;
foreach ($film as $f) {
    $html .= '<tr> 
        <td>' . $i++ . '</td>
        <td>' . $f['judul'] . '</td>
        <td>' . $f['sutradara'] . '</td>
        <td>' . $f['tahun'] . '</td>
        <td>' . $f['genre'] . '</td>
        <td><img src="img/' . $f['poster'] . '" alt="' . $f['judul'] . '" width="100"></td>
    </tr>';
}

$html .= '</table>
    </div>              
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar_film.pdf', 'I'); // 'I' untuk menampilkan di browser, 'D' untuk download