<?php
include "config.php";
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data User</title>
</head>
<body>
  <h2>Daftar User</h2>
  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['email'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br>
</body>
</html>