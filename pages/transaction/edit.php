<?php
$id = $_GET["id"];
$ed = query("SELECT tb_barang.*, vendor.nama FROM tb_barang JOIN vendor ON tb_barang.id_vendor = vendor.id WHERE id_barang='$id'")[0];
if (isset($_POST["submit"])) {
    // cek data
    if (ubah($_POST) > 0) {
        print_r($_POST);
        // die;
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href='index.php?nav=transaction';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href='index.php?nav=transaction';
        </script>";
    }
}
?>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Edit data client</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3">
                <input type="text" value="<?php echo $ed["id_barang"]; ?>" name="id" style="display: none;">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="nama_barang">Name:</label>
                        <input type="text" name='nama_barang' id="nama_barang" value="<?php echo $ed['nama']; ?>" readonly class="form-control w_100" placeholder="nama_barang" aria-label="name_barang" aria-describedby="basic-addon1">

                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="ukuran">Item Size:</label>
                        <input type="text" name='ukuran' id="ukuran" value="<?php echo $ed['ukuran']; ?>" readonly required class="form-control w_100" placeholder="ukuran" aria-label="ukuran" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="kategori">Category:</label>
                        <input type="text" name='kategori' id="kategori" value="<?php echo $ed['kategori']; ?>" readonly class="form-control w_100" placeholder="kategori" aria-label="kategori" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="gambar">Image:</label>
                        <input type="file" name='gambar' id="gambar" required class="form-control w_100" placeholder="gambar" aria-label="gambar" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="harga">Price:</label>
                        <input type="text" name='harga' id="harga" value="<?php echo $ed['harga']; ?>" required class="form-control w_100" placeholder="harga" aria-label="stock" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="stock">Stock:</label>
                        <input type="text" name='stock' id="stock" value="<?php echo $ed['stock']; ?>" required class="form-control w_100" placeholder="stock" aria-label="stock" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="vendor">Vendor:</label>
                        <input type="text" name='vendor' id="vendor" value="<?php echo $ed['nama']; ?>" readonly required class="form-control w_100" placeholder="vendor" aria-label="vendor" aria-describedby="basic-addon1">
                    </div>
                </li>
                <ul class="d-flex justify-content-end gap-3">
                    <li><button type="submit" class="btn btn-warning" id="cancel" name="cancel">Cancel</button></li>
                    <li><button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button></li>
                </ul>
            </ul>
        </form>
    </div>
</body>

</html>