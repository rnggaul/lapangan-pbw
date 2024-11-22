<?php
// Konfigurasi database
$host = "localhost"; // Server database (biasanya localhost)
$user = "root";      // Username MySQL
$pass = "";          // Password MySQL (kosong jika default)
$db   = "user_web"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";

$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Periksa hasil query
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Password benar
        $_SESSION['username'] = $username; // Simpan sesi
        header("Location: process_login.php"); // Redirect ke halaman admin
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}

// Tutup koneksi
$conn->close();


// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Debug data yang diterima
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;

?>