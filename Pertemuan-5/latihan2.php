<?php
    // Penggulanan pada Array
    // Menggunakan for / foreach

    $angka = [1,11,2,22,3,44,5,55,6,22,45,13,2];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: lightblue;
        text-align: center;
        line-height: 50px;
        padding: 20px;
        margin: 3px;
        float: left;
        font-size: 24px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>
    <!-- Menggunakan for -->
    <?php for($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php  } ?>

    <div class="clear"></div>

    <!-- Menggunakan foreach -->
    <?php foreach ($angka as $a ) { ?>
    <div class="kotak"> <?php echo $a ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Perbaikan Foreach -->
    <?php foreach ($angka as $a ) : ?>
    <div class="kotak"><?= $a ?></div>
    <?php endforeach ?>
</body>

</html>