<?php
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // verify username has taken or not
    $stmt = $conn->prepare("SELECT 1 FROM users where username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_row();
    if ($user) {
        $error[] = "This username is already taken!";
    }
    print_r($stmt);
    $query = "INSERT INTO users 
    VALUES
    ('','$nama','$username','$hashed_password','$role')";
    mysqli_query($conn, $query);
    // mysqli affect berfungsi untuk cek apakah data berhasil di input atau tidak
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    // query insert data
    $query = "UPDATE users SET
            nama='$nama',
            username='$username',
            password='$password',
            role='$role'
            WHERE id ='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
