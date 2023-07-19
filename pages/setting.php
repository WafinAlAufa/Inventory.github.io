<?php
require 'config/function/users.php';
$users = query("SELECT * FROM users");
$i = 1;
$setSub = !empty($_GET["setSub"]) ? $_GET["setSub"] : "setting";
$ps = '';
if ($setSub == 'index') {
    $ps = 'setting/index.php';
} elseif ($setSub == 'add') {
    $ps = 'setting/tambah.php';
} elseif ($setSub == 'delete') {
    $ps = 'setting/hapus.php';
} elseif ($setSub == 'update') {
    $ps = 'setting/edit.php';
} else {

    // // Jika tidak ada opsi yang dipilih, misalnya "setting" sebagai default, maka masukkan halaman "setting.php"
    echo "<script>
    window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=setting&setSub=index';
    </script>";
}
include $ps;
