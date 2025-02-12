<?php

session_start();

$host = 'localhost';

$dbname = 'kel5_aplikasisatu';

$username = 'kel5_aplikasisatu'; // Ganti dengan username database Anda

$password = 'kel5_aplikasisatu'; // Ganti dengan password database Anda

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Database connection failed: " . $e->getMessage());

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];

    $password = sha1($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

    $stmt->execute(['username' => $username, 'password' => $password]);

    if ($stmt->rowCount() == 1) {

        $_SESSION['user'] = $username;

        header("Location: admin.php");

        exit();

    } else {

        echo "<script>alert('Invalid username or password'); window.location.href='index.php';</script>";

    }

}
