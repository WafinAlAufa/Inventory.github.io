<?php
function tambah($data)
{

    global $conn;
    $nama = htmlspecialchars($data["nama_barang"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $harga = htmlspecialchars($data["harga"]);
    $stock = htmlspecialchars($data["stock"]);
    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $id_vendor = htmlspecialchars($data["vendor"]);

    $query = "INSERT INTO tb_barang 
    VALUES
    ('','$nama','$ukuran','$kategori','$gambar','$harga','$stock','$id_vendor')";
    mysqli_query($conn, $query);
    // mysqli affect berfungsi untuk cek apakah data berhasil di input atau tidak
    return mysqli_affected_rows($conn);
}

// function upload gambar 
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    // cek apakah gambar terjadi kesalahan atau tidak
    if ($error === 4) {
        echo "<script>alert(Terjadi kesalahan saat mengunggah gambar.)</script>";
        return false;
    }
    //cek apakah file yang di upload merupakan gambar atau bukan
    $ekstensiValid = ["jpg", "jpeg", "png", "gif"];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>alert(File yang diunggah bukan gambar.)</script>";
        return false;
    }
    // cek apakah ukuran terlalu besar
    if ($ukuranFile > 2500000) {
        echo "<script>alert(Ukuran gambar terlalu besar.)</script>";
        return false;
    }
    $timestamp = date("YmdHis");
    $namaFileBaru =  $namaFile . '_' . $timestamp;
    // lolos pengecekan gambar
    move_uploaded_file($tmpName, '../Inventory/assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{

    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_barang"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $harga = htmlspecialchars($data["harga"]);
    $stock = htmlspecialchars($data["stock"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    // query insert data
    $query = "UPDATE tb_barang SET
            nama_barang='$nama',
            ukuran ='$ukuran',
            kategori = '$kategori',
            gambar='$gambar',
            harga=$harga,
            stock='$stock'
            WHERE id_barang ='$id'";
    mysqli_query($conn, $query);
    // print_r($result);
    return mysqli_affected_rows($conn);
}
