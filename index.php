<?php

include "koneksi.php";

//siapkan query (prepare)
$query = $db->prepare("SELECT * FROM mahasantri");

//eksekusi query
$query->execute();

//tampilkan hasil query
$data = $query->fetchAll();

?>

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
        <h4><b>CRUD PDO</b></h4>
        <a href="form.php"><button class="btn btn-primary btn-sm">Tambah Data</button></a>
        <table class="table table-striped table-bordered" style="width: 50%; margin-top:10px;">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td></td>
            </tr>
            <?php
            $no = 1;
            foreach ($data as $mahasantri) { ?>
                <tr>

                    <td><?php echo $no; ?></td>
                    <td><?php echo $mahasantri['nama']; ?></td>
                    <td><?php echo $mahasantri['alamat']; ?></td>
                    <td style="width: 25%;">
                        <a href="edit.php?id=<?php echo $mahasantri['id'] ?>"><button class="btn btn-warning btn-sm">Edit</button></a>
                        <a href="hapus.php?id=<?php echo $mahasantri['id'] ?>" onClick="return confirm('Are you sure you want to delete?')">
                            <button class=" btn btn-danger btn-sm">Hapus</button>
                        </a>
                    </td>

                </tr>
            <?php
                $no++;
            }
            ?>
        </table>
    </div>
</body>

</html>