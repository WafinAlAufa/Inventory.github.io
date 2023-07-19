<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (hapus($id) > 0) {
        echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href='../Inventory/index.php?nav=master';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal dihapus!');
        document.location.href='../Inventory/index.php?nav=master';
        </script>
        ";
    }
}
