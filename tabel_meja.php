<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Meja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Daftar Meja</h1>
  <hr>
  <p>Halaman ini menampilkan data meja restoran.</p>

  <table>
    <tr>
      <th>Nomor Meja</th>
      <th>Kapasitas</th>
      <th>Zonasi</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM meja_264");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nomor_meja'] . "</td>";
        echo "<td>" . $row['kapasitas'] . " Kursi</td>";
        echo "<td>" . $row['zonasi'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>
                <a href='edit_meja.php?id=" . $row['id'] . "'>Edit</a> | 
                <a href='hapus_meja.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
              </td>";
        echo "</tr>";
    }
    ?>
  </table>
  <br>
  <a href="tambah_meja.php">Tambah Meja Baru</a>
</body>
</html>