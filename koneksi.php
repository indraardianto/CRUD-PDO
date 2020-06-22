<?php
$host = "localhost";
$dbname = "db_pdo";
$username = "admin";
$password = "elfalasy";
try {
    //{} merangkai string
    //menciptakan objek baru (database handler) Object inilah yang nantinya
    //akan di gunakan untuk menjalankan perintah-perintah PDO
    //$db = new PDO("mysql:host=localhost;dbname=db_pdo", "admin", "elfalasy");

    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);

    //set mode error dengan exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    //tampilkan pesan kesalahan jika koneksi gagal
    die("Connection error: " . $exception->getMessage());
}
