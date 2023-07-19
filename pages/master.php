<?php
require 'config/function/vendor.php';
$vendors = query("SELECT * FROM vendor");
$setSub = !empty($_GET["venSub"]) ? $_GET["venSub"] : "master";
$ven = '';
if ($setSub == 'index') {
    $ven = 'master/index.php';
} elseif ($setSub == 'add') {
    $ven = 'master/tambah.php';
} elseif ($setSub == 'delete') {
    $ven = 'master/hapus.php';
} elseif ($setSub == 'update') {
    $ven = 'master/edit.php';
} elseif ($setSub == 'export') {
    $ven = 'master/export.php';
} else {
    // // Jika tidak ada opsi yang dipilih, misalnya "master" sebagai default, maka masukkan halaman "master.php"
    echo "<script>
    window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=master&venSub=index';
    </script>";
}
include $ven;
