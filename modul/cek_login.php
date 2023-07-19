<?php
session_start();
require '../config/conn.php';
require '../config/function/users.php';
// Koneksi ke database
// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari pengguna berdasarkan username
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
print_r($user);
if ($user) {
    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Login berhasil, set session dengan informasi pengguna
        $_SESSION['id'] = $user['id'];

        // Arahkan pengguna ke halaman utama (index.php)
        header("Location:../index.php");
        exit();
    } else {
        // Password salah
        header("Location:../pages/login.php?pesan=gagal");
        exit();
    }
} else {
    // Pengguna tidak ditemukan
    header("Location:../pages/login.php?pesan=gagal");
    exit();
}


// $hashed_password = password_hash('1', PASSWORD_DEFAULT);
// echo $hashed_password;
