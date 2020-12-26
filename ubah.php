<?php

require 'function.php';

// ambil data di url
$id = $_GET["id"];



// query data mahasiswa berdasarkan kode
$post = query("SELECT *FROM post_tb WHERE id = $id")[0];


// cek apakah tombol sudah ditekan atau belum:
if (isset($_POST["submit"])) {

    // cek apakah dara berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal diubah');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Content</title>
</head>

<body>
    <h1> Ubah Data Content</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $post["id"]; ?>">
        <ul>
            <li>
                <label for="content">content : </label>
                <input type="text" name="content" id="content" required value="<?= $post["content"] ?>">
            </li>
            <li>
                <label for="image">image : </label>
                <input type="text" name="image" id="image" required value="<?= $post["image"] ?>">
            </li>
            <li>
                <label for="id_user">id_user : </label>
                <input type="text" name="id_user" id="id_user" required value="<?= $post["id_user"] ?>">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>


    </form>
</body>

</html>
