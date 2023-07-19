<?php
$id = $_GET["id"];
$ed = query("SELECT * FROM users WHERE id='$id'")[0];
if (isset($_POST["submit"])) {
    // cek data
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href='index.php?nav=access';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href='index.php?nav=access';
        </script>";
    }
}
?>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Edit data access</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3">
                <input type="text" value="<?php echo $ed["id"]; ?>" name="id" style="display: none;">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="role">Role:</label>
                        <input type="text" name='role' id="role" value="<?php echo $ed['role']; ?>" required class="form-control w_100" placeholder="Role" aria-label="Role" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="feature">Feature:</label>
                        <input type="text" name='feature' id="feature" value="<?php echo $ed['feature']; ?>" required class="form-control w_100" placeholder="Feature" aria-label="Feature" aria-describedby="basic-addon1">
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