<?php
include "koneksi.php";
if ($_POST) {

	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$foto = $_POST['foto'];

	$ekstensi =  array('png', 'jpg', 'jpeg', 'gif', 'JPG');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (empty($jenis)) {
		echo "<script>alert('Jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
	} elseif (empty($harga)) {
		echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
	} elseif (empty($filename)) {
		echo "<script>alert('foto tidak boleh kosong');location.href='tambah_paket.php';</script>";
	} else {
		if (!in_array($ext, $ekstensi)) {
			header("location:tambah_paket.php?alert=gagal_ekstensi");
		} else {
			if ($ukuran < 1044070) {
				$xx = $filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . '' . $filename);
				$insert = mysqli_query($conn, "insert into paket (jenis, harga, foto) value ('" . $jenis . "','" . $harga . "','" . $xx . "')") or die(mysqli_error($conn));
				if ($insert) {
					echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
				} else {
					echo "<script>alert('File melebihi kapasitas yang ditentukan');location.href='tambah_paket.php';</script>";
				}
			}
		}
	}
}
