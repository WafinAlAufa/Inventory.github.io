<?php
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
    // Menghapus semua karakter non-angka
    $numbersOnly = preg_replace('/[^0-9]/', '', $kontak);
    // Memisahkan nomor menjadi setiap 3 digit dengan spasi
    $formattedContact = implode(' ', str_split($numbersOnly, 3));
    // Menambahkan kembali simbol '+'
    $formattedContact = '+' . $formattedContact;
    // fungsi preg_replace untuk menghapus semua karakter non-angka dari variabel $kontact. Kemudian, kita menggunakan fungsi implode dan str_split untuk memisahkan nomor menjadi setiap 3 digit dengan spasi. Terakhir, kita menambahkan kembali simbol + ke hasil yang telah diformat. Dengan menggunakan pendekatan ini, Anda dapat menjaga simbol + tetap ada dan memiliki spasi setiap 3 digit pada nomor telepon yang ditampilkan.

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO client 
    VALUES
    ('','$gambar','$nama','$alamat','$formattedContact')";
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
    mysqli_query($conn, "DELETE FROM client WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    // query insert data
    $query = "UPDATE client SET
            nama='$nama',
            username='$username',
            password='$password',
            role='$role'
            WHERE id ='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
