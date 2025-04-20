<?php 
    // koneksi ke database
    $conn = mysqli_connect("localhost","root","","phpdasar");

    // Function Query
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ) {
            $rows [] = $row;
        }
        return $rows;
    }

    // function tmbah($data)
    function tambah($data) {
        global $conn;
        
        // ambil data dari tiap elemen dalam form dan masukan ke variabel
        $judul = htmlspecialchars($data["judul"]);
        $sutradara = $data["sutradara"];
        $tahun = $data["tahun"];
        $genre = htmlspecialchars($data["genre"]);
        $poster = $data["poster"];

        // query insert data
        $query = "INSERT INTO film (judul,sutradara,tahun,genre,poster)
                    VALUES
                    ('$judul','$sutradara','$tahun','$genre','$poster')
                ";
        mysqli_query($conn, $query);

        // kembalikan data yang diinsert
        return mysqli_affected_rows($conn);
    }

    // function hapus($id) 
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM film  WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>