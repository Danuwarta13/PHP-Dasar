<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Function Query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function tmbah($data)
function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form dan masukan ke variabel
    $judul = htmlspecialchars($data["judul"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $genre = htmlspecialchars($data["genre"]);

    // upload poster
    $poster = upload();
    if (!$poster) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO film (judul,sutradara,tahun,genre,poster)
                    VALUES
                    ('$judul','$sutradara','$tahun','$genre','$poster')
                ";
    mysqli_query($conn, $query);

    // kembalikan data yang diinsert
    return mysqli_affected_rows($conn);
}

// function upload()
function upload()
{
    $nameFile = $_FILES['poster']['name'];
    $ukuranFile = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tmpName = $_FILES['poster']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo " 
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $eksentesiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $nameFile);
    $ekstensiGamabr = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGamabr, $eksentesiGambarValid)) {
        echo "
            <script> 
                alert('yang anda upload buka gamabr!');
            </script>
            ";
        return false;
    }

    // cek jika ukuran gambar terlalau besar
    if ($ukuranFile > 1000000) {
        echo "
            <script>
                alert('ukuran gambar terlalu besar!');
            </script>    
            ";
        return false;
    }

    // Lolos pengecekan gambar siap upload
    // generate nama gambar baru
    $nameFileBaru = uniqid();
    $nameFileBaru .= '.' . $ekstensiGamabr;

    move_uploaded_file($tmpName, 'img/' . $nameFileBaru);

    return $nameFileBaru;
}




// function hapus($id) 
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM film  WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// function ubah($data)
function ubah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form dan masukan ke variabel
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $genre = htmlspecialchars($data["genre"]);
    $posterLama = htmlspecialchars($data["posterLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['poster']['error'] === 4) {
        $poster = $posterLama;
    } else {
        $poster = upload();
    }

    // query update data
    $query = "UPDATE film SET 
                    judul = '$judul',
                    sutradara = '$sutradara',
                    tahun = '$tahun',
                    genre = '$genre',
                    poster = '$poster'
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);

    // kembalikan data yang diupdate
    return mysqli_affected_rows($conn);
}

// function cari($keyword)
function cari($keyword)
{
    $query = "SELECT * FROM film 
                WHERE
                judul LIKE '%$keyword%' OR
                sutradara LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                genre LIKE '%$keyword%'
            ";
    return query($query);
}