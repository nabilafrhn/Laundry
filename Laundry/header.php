<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: login.php');
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">CLEAN LAUNDRY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ">
                <?php
                if ($_SESSION['role']=="admin"){
                ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="tampil_paket.php">Paket</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="tampil_member.php">Member</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="tampil_user.php">User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="data.php">Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="histori_laundry.php">Laporan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                else if ($_SESSION['role']=="kasir"){
                ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="tambah_member.php">Tambah member</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="data.php">Transaksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="histori_laundry.php">Laporan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                else if ($_SESSION['role']=="owner"){
                ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="histori_laundry.php">Laporan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </nav>
      <div class="container bg-light rounded" style="margin-top:10px">