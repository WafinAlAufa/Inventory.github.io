<!-- cek login.php -->
session_start();

$name = !empty($_GET["username"]) ? $_GET["username"] : "";
$password = !empty($_GET["password"]) ? $_GET["password"] : "";

if ($name == 'diar' && $password == 'diar123') {
$_SESSION["sess_login"] = 1;
echo ' login berhasil';
header("Location:http://localhost/inventory/Inventory/index.php?nav=dashboard");
} else {
echo 'login gagal bos <a href="http://localhost/inventory/Inventory/">Kembali</a>';
}



<!-- index.php -->



session_start();

$cek_login = isset($_SESSION["sess_login"]) ? $_SESSION["sess_login"] : 0;

if ($cek_login == 0) {
include "pages/login.php";
} else {
include "pages/main.php";
}