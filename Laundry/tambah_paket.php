<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Penambahan paket</title>
</head>

<body>

    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data">
        <!-- paket -->
        Jenis Paket :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="Kiloan">Kiloan</option>
            <option value="Selimut">Selimut</option>
            <option value="Bedcover">Bed-cover</option>
            <option value="Kaos">Kaos</option>
        </select>
        Harga:
        <input type="number" name="harga" value="" class="form-control">
        Foto Paket:
        <input type="file" name="foto" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah paket" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>