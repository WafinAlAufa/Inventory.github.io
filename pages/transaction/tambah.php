<?php
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {

        echo "
    <script>
    alert('Successfuly add new user');
    document.location.href='index.php?nav=transaction';
    </script>
    ";
    } else {
        echo "
    <script>
   alert('Failed add new user');
   document.location.href='index.php?nav=transaction';
    </script> 
    ";
    }
}
$qq = "SELECT id, nama FROM vendor";
$rr = mysqli_query($conn, $qq);
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
        <h1>BUY NEW PRODUCT</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="d-flex flex-column gap-3 ">
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="nama">Name:</label>
                        <input type="text" name='nama_barang' id="nama_barang" required class="form-control w_100" placeholder="Input Product Name" aria-label="Input Product Name" aria-describedby="basic-addon1" maxlength="20">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="vendor">Vendor:</label>
                        <?php
                        echo "<select name='vendor' class='form-select w_100' aria-label='Default select example' >";
                        echo " <option value='' disabled selected>
                            SELECT VENDOR</option>";
                        while ($row = mysqli_fetch_assoc($rr)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="kategori">Catogory:</label>
                        <select name="kategori" id="kategori-1" class="form-select w_100">
                            <option value="" disabled selected>
                                Select Category
                            </option>
                            <option value="baju">
                                Clothe
                            </option>
                            <option value="sepatu">
                                Shoes
                            </option>
                            <option value="celana">
                                Pants
                            </option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="ukuran">Item Size:</label>
                        <select name="ukuran" id="kategori-2" class="form-select w_100">
                            <option value="" disabled selected>
                                Select Size
                            </option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="gambar">Upload Image:</label>
                        <input type="file" name="gambar" id="gambar" required class="form-control w_100" placeholder="Input Image" aria-label="Input Image" aria-describedby="basic-addon1">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="harga">Price</label>
                        <input type="text" pattern="[+0-9]+" name='harga' id="harga" required class="form-control w_100" placeholder="Example Rp.1000.000" aria-label="Input Contact" aria-describedby="basic-addon1" maxlength="12">
                    </div>
                </li>
                <li>
                    <div class="input-group mb-3 d-flex flex-column mb-3 gap-2">
                        <label for="stock">Stock</label>
                        <input type="text" pattern="[+0-9]+" name='stock' id="stock" required class="form-control w_100" placeholder="Input Stock" aria-label="Input Contact" aria-describedby="basic-addon1" maxlength="12">
                    </div>
                </li>
                <ul class="d-flex justify-content-end gap-3 ">
                    <li><button type="submit" class="btn btn-warning" id="cancel" name="cancel">Cancel</button></li>
                    <li><button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button></li>
                </ul>
            </ul>
        </form>
    </div>
    <script src="../Inventory/assets/js/selectsyncro.js"></script>
</body>

</html>