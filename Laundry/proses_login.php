<?php
if ($_POST) { //menerima post dari login 
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];        //jadi yang orange itu harus sama dengan variabel yg ada di login
    $nama = $_POST['nama'];
    if (empty($username)) {
        echo "<script> alert('Username tidak boleh kosong'); location.href='login.php'; </script>";
    } elseif (empty($pass)) {
        echo "<script> alert('Password tidak boleh kosong'); location.href='login.php'; </script>";
    } elseif (empty($role)) {
        echo "<script> alert('Role tidak boleh kosong'); location.href='login.php'; </script>";
    } else {
        include "koneksi.php"; //menyambungkan ke database
        $qry_login = mysqli_query($conn, "select * from user where username = '" . $username . "' and password = '" . md5($pass) . "'"); //md5 untuk menyembunyikan
        if (mysqli_num_rows($qry_login) > 0) { //harus terisi
            $data_login = mysqli_fetch_array($qry_login);
            if ($role == $data_login['role']) {
                session_start();
                $_SESSION['id_user'] = $data_login['id_user']; //menyesuaikan dengan data yang sudah ditambahkan
                $_SESSION['nama'] = $data_login['nama'];
                $_SESSION['role'] = $data_login['role'];
                $_SESSION['status_login'] = true;
                header("location: home.php");
            } else {
                echo "<script>alert('Akun tidak ada');location.href='login.php';</script>";
            }
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}
