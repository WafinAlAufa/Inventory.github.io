<?php
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert('Successfuly add new user');
    document.location.href='index.php?nav=client';
    </script>
    ";
    } else {
        echo "
    <script>
   alert('Failed add new user');
   document.location.href='index.php?nav=client';
    </script> 
    ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data vendor</title>
</head>

<body>
    <div class="container d-flex flex-column gap-40 pt-3">
        <h1>Add data client</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3 ">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="nama">Name:</label>
                        <input type="text" name='nama' id="nama" required class="form-control w_100" placeholder="Input Company Name" aria-label="Input Company Name" aria-describedby="basic-addon1" maxlength="20">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="alamat">Address:</label>
                        <input type="text" name='alamat' id="alamat" required class="form-control w_100" placeholder="Input Address" aria-label="Input Address" aria-describedby="basic-addon1" maxlength="25">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="kontak">Contact:</label>
                        <input type="text" pattern="[+0-9]+" name='kontak' id="kontak" required class="form-control w_100" placeholder="Example +62999999999" aria-label="Input Contact" aria-describedby="basic-addon1" maxlength="12">
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
        </form>
    </div>
</body>

</html>