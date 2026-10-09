<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST['nomor_meja'];
    $kapasitas = $_POST['kapasitas'];
    $zonasi = $_POST['zonasi'];
    $status = $_POST['status'];

    $query = "INSERT INTO meja_264 (nomor_meja, kapasitas, zonasi, status) VALUES ('$nomor', '$kapasitas', '$zonasi', '$status')";
    mysqli_query($conn, $query);
    header("Location: tabel_meja.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Meja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Tambah Meja</h1>
  <hr>
  <p>Isi form di bawah ini untuk menambah data meja baru.</p>
  <form method="POST" action="">
    <label for="nomor_meja">Nomor Meja:</label><br>
    <input type="text" id="nomor_meja" name="nomor_meja" required><br><br>

    <label for="kapasitas">Kapasitas:</label><br>
    <select id="kapasitas" name="kapasitas">
      <option value="2">2 Kursi</option>
      <option value="4">4 Kursi</option>
      <option value="8">8 Kursi</option>
    </select><br><br>

    <label for="zonasi">Zonasi:</label><br>
    <select id="zonasi" name="zonasi">
      <option value="Indoor">Indoor</option>
      <option value="VIP">VIP</option>
    </select><br><br>

    <label for="status">Status:</label><br>
    <select id="status" name="status">
      <option value="Tersedia">Tersedia</option>
      <option value="Terisi">Terisi</option>
      <option value="Reserved">Reserved</option>
    </select><br><br>

    <button type="submit">Simpan</button>
  </form>
  <br>
  <a href="tabel_meja.php">Kembali ke Daftar Meja</a>
</body>
</html>