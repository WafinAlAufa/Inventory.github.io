<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container">
   
   <div class="box-login">
   <form action="">
        <div class="login-text-box">
            <h1 class="login-text">REGISTER</h1>
        </div>
        <div class="user-name">
            <label for="name">Username</label>
            <input type="text" class='name' id='name' name='name' require>
        </div>
        <div class="user-email">
            <label for="email">Email</label>
            <input type="email" class='email' id='email' name='email' require> 
        </div>
        <div class="user-password">
            <label for="password">Password</label>
            <input type="password" class='password' id='password' name='password' require> 
        </div>
        <div class="user-login">
            <button class="login" id="login">
              Register
            </button>
        </div>
        <div class="user-register">
            <h3 class="registrasi" id="registrasi">Sudah punya akun? <a href="login.php" class="cekidot">Login di sini</a></h3>
        </div>
    </div>
    </form> 
   </div> 
</body>
</html>