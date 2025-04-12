<?php 

    // Variabel Scope / lingkup variabel
    // $x = 10;

    // function tampilX() {
    //     global $x;
    //     // echo $x;
    // }

    // tampilX();

    // SUPER GLOBALS
    // Variabel global milik PHP
    // Merupakan Array Associative
    // Beberapa Variabel $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $_FILES, $_ENV, $_REQUEST, $_GLOBALS
    // Contoh
    // var_dump($_SERVER["SERVER_NAME"]);
    
    // $_GET
    // Cara memasukan data ke dalam $_GET
    // $_GET["nama"] = "Rhinozz";
    // $_GET["nim"] = "210103104";
    // var_dump($_GET);

    $film = [
        [
            "judul" => "Avengers: Endgame",
            "sutradara" => "Anthony dan Joe Russo",
            "tahun" => 2019,
            "genre" => "action",
            "rating" => 8.4,
        ],
        [
            "judul" => "Spider Man: No Way Home",
            "sutradara" => "Jon Watts",
            "tahun" => 2021,
            "genre" => "action",
            "rating" => 8.7,
        ],
        [
            "judul" => "The Batman",
            "sutradara" => "Matt Reeves",
            "tahun" => 2022,
            "genre" => "action",
            "rating" => 8.3,
        ],
        [
            "judul" => "Avatar: The Way of Water",
            "sutradara" => "James Cameron",
            "tahun" => 2022,
            "genre" => "action",
            "rating" => 7.8,
        ],
        [
            "judul" => "Black Panther: Wakanda Forever",
            "sutradara" => "Ryan Coogler",
            "tahun" => 2022,
            "genre" => "action",
            "rating" => 7.4,
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Film</h1>

    <ul>
        <?php foreach ($film as $f) : ?>
        <li>
            <a
                href="latihan2.php?judul=<?=$f["judul"] ?>&sutradara=<?=$f["sutradara"] ?>&tahun=<?=$f["tahun"]?>&genre=<?=$f['genre']?>&rating=<?=$f["rating"]?>"><?= $f["judul"]?></a>
        </li>
        <?php endforeach;?>
    </ul>
</body>

</html>