<?php 
    // hubungkan ke file functions.php
    require 'functions.php';

    // tangkap id dari url
    $id = $_GET["id"];

    if ( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }



?>