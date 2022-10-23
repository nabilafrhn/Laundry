<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    
    include "header.php";
    
    include "koneksi.php";
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <h3>Update</h3>
    <form action="proses_update.php" method="post">
        <input type="hidden" name="id_transaksi" value= "<?=$dt_transaksi['id_transaksi']?>">
        status :
        <?php 
        $arr_status=array('baru'=>'baru','proses'=>'proses','selesai'=>'selesai','diambil'=>'diambil');
        ?>
        <select name="status" class="form-control">
            <option></option>
            <?php foreach ($arr_status as $key_status => $val_status):
                if($key_status==$dt_transaksi['status']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_status?>" <?=$selek?>><?=$val_status?></option>
            <?php endforeach ?>
        </select><br>
        pembayaran : 
        <?php 
        $arr_pembayaran=array('dibayar'=>'dibayar','belum_dibayar'=>'belum dibayar');
        ?>
        <select name="pembayaran" class="form-control">
            <option></option>
            <?php foreach ($arr_pembayaran as $key_pembayaran => $val_pembayaran):
                if($key_pembayaran==$dt_transaksi['dibayar']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_pembayaran?>" <?=$selek?>><?=$val_pembayaran?></option>
            <?php endforeach ?>
        </select><br>
        
        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
