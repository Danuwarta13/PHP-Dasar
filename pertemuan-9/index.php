<?php 
    require 'functions.php';
    $film = query("SELECT * FROM film");    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-film"></i> Film Management Dashboard</h1>
            <a href="tambah.php" class="btn btn-add"><i class="fas fa-plus"></i> Add New Film</a>
        </header>

        <div class="card">
            <div class="search-bar">
                <input type="text" placeholder="Search films...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Director</th>
                            <th>Year</th>
                            <th>Genre</th>
                            <th>Poster</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1 ?>
                        <?php foreach ($film as $f) :?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><strong><?= $f["judul"] ?></strong></td>
                            <td><?= $f["sutradara"] ?></td>
                            <td><?= $f["tahun"] ?></td>
                            <td>
                                <span class="status-badge badge-success"><?= $f["genre"] ?></span>
                            </td>
                            <td>
                                <img src="img/<?=$f["poster"] ?>" alt="<?= $f["judul"] ?>" class="poster-thumb">
                            </td>
                            <td class="action-btns">
                                <a href="" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                                <a href="" class="delete-btn"><i class="fas fa-trash-alt"></i> Delete</a>
                            </td>
                        </tr>
                        <?php $id++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
</body>

</html>