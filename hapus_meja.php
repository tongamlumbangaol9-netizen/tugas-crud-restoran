<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = "DELETE FROM meja_264 WHERE id=$id";
mysqli_query($conn, $query);

header("Location: tabel_meja.php");
?>