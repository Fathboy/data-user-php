<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // cek apakah email sudah pernah dipakai
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "⚠ Email sudah pernah digunakan. Anda hanya bisa submit sekali.<br>";
        exit;
    }

    // simpan data baru
    $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Data berhasil disimpan.  follow my ig @fat1mhd";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>