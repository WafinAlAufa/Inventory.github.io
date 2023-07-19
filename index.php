<?php
session_start();

$cek_login = isset($_SESSION["id"]) ? 1 : 0;

if ($cek_login == 0) {
    include "pages/login.php";
} else {

    // Mendapatkan informasi pengguna dari database berdasarkan id
    $user_id = $_SESSION['id'];

    // Koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_inventory";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Query untuk mendapatkan informasi pengguna
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    // print_r($user);

    if (!$user['id']) {
        // Pengguna tidak ditemukan, arahkan ke halaman login
        header("Location: pages/login.php");
        exit();
    }

    // Mengarahkan pengguna ke halaman sesuai dengan peran/hak akses mereka
    if ($user['role'] == 'Admin') {
        // Pengguna dengan peran admin
        include "pages/main.php";
    } elseif ($user['role'] == 'user') {
        // Pengguna dengan peran user
        include "pages/user.php";
    } else {
        // Peran tidak valid, arahkan ke halaman login
        header("Location:pages/login.php");
        exit();
    }
}
