<?php
include "config.php";

// hapus semua data user
$sql = "TRUNCATE TABLE users";
if (mysqli_query($conn, $sql)) {
    echo "✅ Semua data berhasil direset.<br>";
    echo "<a href='index.php'>Kembali ke Form</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>