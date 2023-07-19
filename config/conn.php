<?php
// Buat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_inventory';

$conn = mysqli_connect($host, $username, $password, $database);
// Periksa koneksi
if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
// Jalankan query SELECT
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
