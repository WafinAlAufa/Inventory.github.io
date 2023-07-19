<?php
$id = $_GET["id"];
$ed = query("SELECT * FROM vendor WHERE id='$id'")[0];
if (isset($_POST["submit"])) {
    // cek data
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href='index.php?nav=master';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href='index.php?nav=master';
        </script>";
    }
}
?>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Edit data master</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3">
                <input type="text" value="<?php echo $ed["id"]; ?>" name="id" style="display: none;">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="nama">Name:</label>
                        <input type="text" name='nama' id="nama" required class="form-control w_100" placeholder="Input Company Name" aria-label="Input Company Name" aria-describedby="basic-addon1" maxlength="20" value="<?php echo $ed['nama']; ?>">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="alamat">Address:</label>
                        <input type="text" name='alamat' id="alamat" value="<?php echo $ed['alamat']; ?>" required class="form-control w_100" placeholder="Input Address" aria-label="Input Address" aria-describedby="basic-addon1" maxlength="25">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="kontak">Contact:</label>
                        <input type="text" pattern="[+0-9]+" name='kontak' id="kontak" value="<?php echo $ed['kontak']; ?>" class="form-control w_100" placeholder="Example +62999999999" aria-label="Input Contact" aria-describedby="basic-addon1" maxlength="12">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="gambar">Upload Image:</label>
                        <input type="file" name="gambar" id="gambar" required class="form-control w_100" placeholder="Input Image" aria-label="Input Image" aria-describedby="basic-addon1">
                    </div>
                </li>
                <ul class="d-flex justify-content-end gap-3 ">
                    <li><button type="submit" class="btn btn-warning" id="cancel" name="cancel">Cancel</button></li>
                    <li><button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button></li>
                </ul>
            </ul>
            </ul>
        </form>
    </div>
</body>

</html>