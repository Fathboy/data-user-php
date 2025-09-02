<?php
$host = "localhost";
$user = "root"; // ganti sesuai user MySQL
$pass = "";     // ganti sesuai password MySQL
$db   = "userdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>