<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    include "koneksi.php";

    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        if (empty($nama) || empty($alamat)) {

            if (empty($nama)) {
                echo "<font color='red'>Nama field is empty.</font><br/>";
            }
            if (empty($alamat)) {
                echo "<font color='red'>Alamat field is empty.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            $sql = "INSERT INTO mahasantri(nama, alamat) VALUES(:nama, :alamat)";
            $query = $db->prepare($sql);

            // variabel penampung yang nantinya akan diisi data
            //Method ini membutuhkan 2 argumen
            //Argumen pertama adalah angka urutan dari “tempat data” yang ditulis pada proses prepare
            $query->bindparam(':nama', $nama);
            $query->bindparam(':alamat', $alamat);

            //eksekusi perintah
            $query->execute();
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }
    ?>
</body>

</html>