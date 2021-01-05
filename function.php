<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dumbsway");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{

    global $conn;

    // ambil data dari tiap elemen dari form
    $content = htmlspecialchars($data["content"]);
    $image = htmlspecialchars($data["image"]);
    $id_user = htmlspecialchars($data["id_user"]);


    //  query insert data
    $query = "INSERT INTO post_tb VALUES
    ('','$content','$image','$id_user')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM post_tb WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubah($data)
{

    global $conn;

    // ambil data dari tiap elemen dari form
    $id = $data["id"];
    $content = htmlspecialchars($data["content"]);
    $image = htmlspecialchars($data["image"]);


    //  query insert data
    $query = "UPDATE post_tb SET
    content = '$content',
    image = '$image'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
