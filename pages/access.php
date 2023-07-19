<?php
require 'config/function/accesses.php';
$accesses = query("SELECT * FROM access");
$i = 1;
$setSub = !empty($_GET["accSub"]) ? $_GET["accSub"] : "access";
$acc = '';
if ($setSub == 'index') {
    $acc = 'access/index.php';
} elseif ($setSub == 'add') {
    $acc = 'access/tambah.php';
} elseif ($setSub == 'delete') {
    $acc = 'access/hapus.php';
} elseif ($setSub == 'update') {
    $acc = 'access/edit.php';
} else {
    // // Jika tidak ada opsi yang dipilih, misalnya "access" sebagai default, maka masukkan halaman "access.php"
    echo "<script>
    window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=access&accSub=index';
    </script>";
}
include $acc;
