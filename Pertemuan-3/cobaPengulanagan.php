<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
    .warna-baris {
        background-color: lightblue;
    }

    .warna-kolom {
        background-color: lightgreen;
    }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php // Cara pertama 
            // for ($b = 1; $b <= 3; $b++) {
            //     echo "<tr>";
            //     for ($k=1; $k <= 5; $k++) { 
            //         echo "<td>$b.$k </td>";
            //     }
            //     echo "</tr>";
            // }
        ?>

        <!-- Cara Kedua -->
        <?php for ($b=1; $b <= 5 ; $b++) : ?>
        <?php if ($b % 2 == 1) : ?>
        <tr class="warna-baris">
            <?php else : ?>
        <tr>
            <?php endif; ?>
            <?php for ($k= 1; $k <= 5 ; $k++) : ?>
            <!-- menggnuakan ternary -->
            <?php echo $k %2 == 1 ? "<td class='warna-kolom'>$k.$b</td>" : "<td>$k.$b</td>" ?>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>


    </table>
</body>

</html>