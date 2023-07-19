<?php
require 'config/function/transaction.php';
$transactions = query("SELECT 
                            b.*, 
                            v.nama AS nama_vendor, v.id AS id_vendor
                        FROM tb_barang AS b
                        JOIN vendor AS v ON b.id_vendor = v.id
                    ");
$filters = query("SELECT 
                        b.*, 
                        v.nama AS nama_vendor, v.id AS id_vendor
                        FROM tb_barang AS b
                        JOIN vendor AS v ON b.id_vendor = v.id GROUP BY v.id
                    ");
$setSub = !empty($_GET["transactionSub"]) ? $_GET["transactionSub"] : "transaction";
$tran = '';
if ($setSub == 'index') {
    $tran = 'transaction/index.php';
} elseif ($setSub == 'add') {
    $tran = 'transaction/tambah.php';
} elseif ($setSub == 'delete') {
    $tran = 'transaction/hapus.php';
} elseif ($setSub == 'update') {
    $tran = 'transaction/edit.php';
} elseif ($setSub == 'export') {
    $tran = 'transaction/export.php';
} else {
    // // Jika tidak ada opsi yang dipilih, misalnya "transaction" sebagai default, maka masukkan halaman "transaction.php"
    echo "<script>
    window.location.href = 'http://localhost/inventory/Inventory/index.php?nav=transaction&transactionSub=index';
    </script>";
}
include $tran;
