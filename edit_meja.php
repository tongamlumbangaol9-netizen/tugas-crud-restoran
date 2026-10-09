<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM meja_264 WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor = $_POST['nomor_meja'];
    $kapasitas = $_POST['kapasitas'];
    $zonasi = $_POST['zonasi'];
    $status = $_POST['status'];

    $query = "UPDATE meja_264 SET nomor_meja='$nomor', kapasitas='$kapasitas', zonasi='$zonasi', status='$status' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: tabel_meja.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Meja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Edit Meja</h1>
  <hr>
  <form method="POST" action="">
    <label for="nomor_meja">Nomor Meja:</label><br>
    <input type="text" id="nomor_meja" name="nomor_meja" value="<?php echo $data['nomor_meja']; ?>" required><br><br>

    <label for="kapasitas">Kapasitas:</label><br>
    <select id="kapasitas" name="kapasitas">
      <option value="2" <?php if($data['kapasitas'] == 2) echo 'selected'; ?>>2 Kursi</option>
      <option value="4" <?php if($data['kapasitas'] == 4) echo 'selected'; ?>>4 Kursi</option>
      <option value="8" <?php if($data['kapasitas'] == 8) echo 'selected'; ?>>8 Kursi</option>
    </select><br><br>

    <label for="zonasi">Zonasi:</label><br>
    <select id="zonasi" name="zonasi">
      <option value="Indoor" <?php if($data['zonasi'] == 'Indoor') echo 'selected'; ?>>Indoor</option>
      <option value="VIP" <?php if($data['zonasi'] == 'VIP') echo 'selected'; ?>>VIP</option>
    </select><br><br>

    <label for="status">Status:</label><br>
    <select id="status" name="status">
      <option value="Tersedia" <?php if($data['status'] == 'Tersedia') echo 'selected'; ?>>Tersedia</option>
      <option value="Terisi" <?php if($data['status'] == 'Terisi') echo 'selected'; ?>>Terisi</option>
      <option value="Reserved" <?php if($data['status'] == 'Reserved') echo 'selected'; ?>>Reserved</option>
    </select><br><br>

    <button type="submit">Update</button>
  </form>
  <br>
  <a href="tabel_meja.php">Batal</a>
</body>
</html>