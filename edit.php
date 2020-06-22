<?php
include "koneksi.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if (empty($nama) || empty($alamat)) {
        if (empty($nama)) {
            echo "<font color='red'>Nama field is empty.</font><br/>";
        }
        if (empty($alamat)) {
            echo "<font color='red'>Alamat field is empty.</font><br/>";
        }
    } else {
        $sql = "UPDATE mahasantri SET nama=:nama, alamat=:alamat WHERE id=:id";
        $query = $db->prepare($sql);

        $query->bindparam(':id', $id);
        $query->bindparam(':nama', $nama);
        $query->bindparam(':alamat', $alamat);
        $query->execute();

        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];

$sql = "SELECT * FROM mahasantri WHERE id=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $nama = $row['nama'];
    $alamat = $row['alamat'];
}
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
        <h4><b>Form Edit Data</b></h4>
        <a href="index.php"><button class="btn btn-success btn-sm">Kembali</button></a>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <form action="edit.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Mahasantri</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control"><?php echo $alamat; ?></textarea>
                    </div>
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>