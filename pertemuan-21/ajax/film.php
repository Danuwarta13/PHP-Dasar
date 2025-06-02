<?php


require '../functions.php';
// Mengambil data film dari database
$keyword = $_GET['keyword'];
$query = "SELECT * FROM film 
                WHERE
                judul LIKE '%$keyword%' OR
                sutradara LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                genre LIKE '%$keyword%'
            ";
$film = query($query);

?>

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
        <?php foreach ($film as $f) : ?>
        <tr>
            <td><?= $id ?></td>
            <td><strong><?= $f["judul"] ?></strong></td>
            <td><?= $f["sutradara"] ?></td>
            <td><?= $f["tahun"] ?></td>
            <td>
                <span class="status-badge badge-success"><?= $f["genre"] ?></span>
            </td>
            <td>
                <img src="img/<?= $f["poster"] ?>" alt="<?= $f["judul"] ?>" class="poster-thumb">
            </td>
            <td class="action-btns">
                <a href="ubah.php?id=<?= $f["id"] ?>" class="edit-btn"><i class="fas fa-edit"></i>
                    Edit</a>
                <a href="hapus.php?id=<?= $f["id"] ?>" onclick="return confirm('Yakin?');" class="delete-btn"><i
                        class="fas fa-trash-alt"></i>
                    Delete</a>
            </td>
        </tr>
        <?php $id++ ?>
        <?php endforeach; ?>
    </tbody>
</table>