<?php 
session_start();
    if($_POST){
        $id_member=$_SESSION['id_member'];
        $nama=$_SESSION['nama'];
        $paket=$_POST['jenis'];
        $qty=$_POST['qty'];
        include "koneksi.php";

        $qry_get_paket=mysqli_query($conn,"select * from paket where jenis='".$paket."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        $qry_get_member=mysqli_query($conn,"select * from member where nama_member='".$nama."'");
        $dt_member=mysqli_fetch_array($qry_get_member);

            $_SESSION['cart'][]=array(
                'id_member'=>$dt_member['id_member'],
                'nama'=>$dt_member['nama_member'],
                'id_paket'=>$dt_paket['id_paket'],
                'paket'=>$dt_paket['jenis'],
                'harga'=>$dt_paket['harga'],
                'qty'=>$qty
            );
        

        
    }
    header('location: keranjang.php');
?>