<?php
if ($_POST) {
    $id_paket = $_POST['id_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];


    $ekstensi = array('png', 'jpg', 'jpeg');
    $namafile = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    $ukuran = $_FILES['file']['size'];


    if (empty($jenis)) {
        echo "<script>alert('jenis tidak boleh kosong');location.href='ubah_paket.php?id_paket=" . $id_paket . "';
        </script>";
    } elseif (empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='ubah_paket.php?id_paket=" . $id_paket . "';
        </script>";
    } else {
        include "koneksi.php";
       
            $update = mysqli_query($conn, "update paket set jenis='" . $jenis . "', harga='" . $harga . "' where id_paket = '" . $id_paket . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php?id_paket=" . $id_paket . "';
                </script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=" . $id_paket . "';
                </script>";
            }
        }
    }

