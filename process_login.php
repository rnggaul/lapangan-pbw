<?php
session_start();

// Cek apakah sesi login aktif
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit;
}

echo "<h1>Selamat datang, " . $_SESSION['username'] . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
?>