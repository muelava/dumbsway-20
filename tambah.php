<?php

require 'function.php';
// cek apakah tombol sudah ditekan atau belum:
if (isset($_POST["submit"])) {

    // cek apakah dara berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
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
    <title>Tambah content</title>
</head>

<body>
    <h1> Tambah content</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="content">content : </label>
                <input type="text" name="content" id="content" required>
            </li>
            <li>
                <label for="image">Image : </label>
                <input type="text" name="image" id="image" required>
            </li>
            <li>
                <label for="id_user">Id_user : </label>
                <input type="text" name="id_user" id="id_user" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
</body>

</html>