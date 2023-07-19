<?php
function tambah($data)
{
    global $conn;
    $role = htmlspecialchars($data["role"]);
    $feature = htmlspecialchars($data["feature"]);
    $query = "INSERT INTO access 
    VALUES
    ('','$role','$feature')";
    mysqli_query($conn, $query);
    // mysqli affect berfungsi untuk cek apakah data berhasil di input atau tidak
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM access WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $role = htmlspecialchars($data["role"]);
    $feature = htmlspecialchars($data["feature"]);
    // query insert data
    $query = "UPDATE users SET
            role='$role',
            feature='$feature'
            WHERE id ='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
