<?php
require 'config/function/client.php';
$clients = query("SELECT * FROM client");
$setSub = !empty($_GET["clientSub"]) ? $_GET["clientSub"] : "client";
$clie = '';
if ($setSub == 'index') {
    $clie = 'client/index.php';
} elseif ($setSub == 'add') {
    $clie = 'client/tambah.php';
} elseif ($setSub == 'delete') {
    $clie = 'client/hapus.php';
} elseif ($setSub == 'update') {
    $clie = 'client/edit.php';
} elseif ($setSub == 'export') {
    $clie = 'client/export.php';
} else {
    // // Jika tidak ada opsi yang dipilih, misalnya "client" sebagai default, maka masukkan halaman "client.php"
    echo "<script>
    window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=client&clientSub=index';
    </script>";
}
include $clie;
