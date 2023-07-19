<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <?php
        // Menampilkan pesan error jika login gagal
        if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') {
            echo "<script>
            alert('Username or Password is Inccorect');
            document.location.href='http://localhost/inventory/Inventory/';
            </script>";
        }
        ?>
        <div class="box-login">
            <form action="modul/cek_login.php" method="POST">

                <div class="login-text-box">
                    <h1 class="login-text">LOGIN</h1>
                </div>
                <div class="user-name">
                    <label for="name">Username</label>
                    <input type="text" class='name' id='name' name='username' require>
                </div>
                <div class="user-password">
                    <label for="password">Password</label>
                    <input type="password" class='password' id='password' name='password' require>
                </div>
                <div class="user-login">
                    <button class="login" id="login">
                        Log in
                    </button>
                </div>
                <div class="user-register">
                    <h3 class="registrasi" id="registrasi">Belum punya akun? <a href="register.php" class="cekidot">Register di sini</a></h3>
                </div>
        </div>
        </form>

    </div>
</body>

</html>