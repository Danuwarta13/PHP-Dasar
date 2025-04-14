<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost","root","","phpdasar");

    // ambil data dari tabel film / query data film
    $result = mysqli_query($conn, "SELECT * FROM film");
    
    // ambil data (fetch) film dari object result
    // mysqli_fetch_row() // mengembalikan Array Numerik
    // mysqli_fetch_assoc() // mengembalikan Array Associative
    // mysqli_fetch_array() // mengembalikan Array
    // mysqli_fetch_object() // mengembalikan object

    // while ( $film = mysqli_fetch_assoc($result)) {
    //     var_dump($film);
    // }
    
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

        <?php while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["sutradara"] ?></td>
            <td><?= $row["tahun"] ?></td>
            <td><?= $row["genre"] ?></td>
            <td>
                <img src="img/<?=$row["poster"] ?>" alt="" width="50">
            </td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>