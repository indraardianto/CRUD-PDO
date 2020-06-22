<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <h4><b>Form Tambah Data</b></h4>
        <a href="index.php"><button class="btn btn-warning btn-sm">Kembali</button></a>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <form action="tambah.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Mahasantri</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>