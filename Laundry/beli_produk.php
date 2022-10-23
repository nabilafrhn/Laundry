<?php
include "header.php";
include "koneksi.php";
$qry_detail_paket = mysqli_query($conn, "select * from paket where id_paket = '" . $_GET['id_paket'] . "'");
$dt_paket = mysqli_fetch_array($qry_detail_paket);
?>
<h2>Pilih Paket</h2>
<div class="row">
    <div class="col-md-4">

        <img src="img/<?= $dt_paket['foto'] ?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_paket=<?= $dt_paket['id_paket'] ?>" method="post">
            <table class="table table-hover table-striped">
                <div class="col-md-3">
                    <div class="card">
                        <td>Jenis</td>
                        <td><?= $dt_paket['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?= $dt_paket['harga'] ?></td>
                        </tr>
                        <td>Jumlah Beli</td>
                        <td><input type="number" name="qty" value="1"></td>
                        </tr>
                        <tr>

                        <tr>
                            <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                        </tr>
                    </div>
                </div>


            </table>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>
`