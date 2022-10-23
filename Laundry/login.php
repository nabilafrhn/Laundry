<?php
error_reporting(E_ERROR | E_PARSE); //untuk menghilangkan notif error yang seharusya tidak ada
session_start();
if ($_SESSION['status_login'] == true) { //jika belum logout / statusnya masih login
    header('location: home.php');
} else { //jika sudah logout
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laundry Shop</title>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="container">
            <div class="login">
                <form action="proses_login.php" method="post" enctype="multipart/form-data">
                    <h1>Clean Laundry</h1>
                    <hr>
                    <br>
                    Username
                    <input type="text" name="username" value="" class="form-control">

                    Password
                    <input type="password" name="password" class="form-control">
                    
                    Role
                    <br>
                    <select name="role" class="form-control">
                        <option></option>
                        <option value="owner">Owner</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                    </select>
                    <br>
                    <button>Login</button>
                    <p>
                        <a href="tambah_user.php">Buat Akun</a>
                    </p>
                </form>
            </div>
            <div class="right">
                <img src="img/shop.jpg" alt="" width="400px" height="200px">
            </div>
        </div>
    </body>

    </html>
<?php
}
?>