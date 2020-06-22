<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM mahasantri WHERE id=$id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));

header("Location:index.php");
