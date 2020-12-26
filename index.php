<?php

require "function.php";
$user = query("SELECT *FROM users_tb");
$post = query("SELECT *FROM post_tb");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalgam</title>
</head>

<body>

    <a href="tambah.php">Tambah content</a>

    <?php $i = 1; ?>
    <?php foreach ($user as $low) : ?>
        <?php foreach ($post as $row) { ?>
            <h1><?= $low["name"]; ?></h1>
            <h1><?= $row["content"]; ?></h1>
            <img src="<?= $row['image'] ?>" alt="<?= $row['image'] ?>" width="200"> <br>
            <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
        <?php } ?>

        <?php $i++; ?>
    <?php endforeach; ?>




</body>

</html>