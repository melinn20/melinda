<?php
$servername = "localhost";
$username = "kel5_aplikasisatu"; // Sesuaikan dengan username MySQL Anda
$password = "kel5_aplikasisatu"; // Sesuaikan dengan password MySQL Anda
$dbname = "kel5_aplikasisatu";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
