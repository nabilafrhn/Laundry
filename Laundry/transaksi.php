<?php 
    include "header.php";
    include "koneksi.php";
    // $qry_detail_paket=mysqli_query($conn,"select * from paket");
    // $dt_paket=mysqli_fetch_array($qry_detail_paket);
    // $qry_detail_member=mysqli_query($conn,"select * from member");
    // $dt_member=mysqli_fetch_array($qry_detail_member);
?>
<h2>TRANSAKSI</h2>
<div class="row">
    <div class="col-md-8">
        <form action="masukkankeranjang.php" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Paket</td><td>
                        <select name="jenis" class="form-control">
                        <option></option>
                        <option value="kiloan">kiloan</option>
                        <option value="selimut">selimut</option>
                        <option value="bed_cover">bed-cover</option>
                        <option value="kaos">kaos</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Paket</td><td><input type="number" name="qty" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Tambah"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>