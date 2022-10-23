<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_paket = mysqli_query($conn, "select * from paket where id_paket = '" . $_GET['id_paket'] . "'");
    $dt_paket = mysqli_fetch_array($qry_get_paket);
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Ubah paket</div>
            <div class="card-body">
                <form action="proses_ubah_paket.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_paket" value="<?= $dt_paket['id_paket'] ?>">
                    <div class="form-group">
                        <label>Jenis</label>
                        <input type="text" name="jenis" value="<?= $dt_paket['jenis'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" value="<?= $dt_paket['harga'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="file" value="<?= $dt_produk['foto'] ?>" class="form-control">
                    </div>

                    <input type="submit" name="simpan" value="Ubah paket" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>