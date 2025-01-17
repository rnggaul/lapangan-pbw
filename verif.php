<?php
// Konfigurasi koneksi database
$host = 'localhost';       // Host database
$dbname = 'user_web';      // Nama database
$username_db = 'root';     // Username database (default: root)
$password_db = '';         // Password database (default: kosong)

// Koneksi ke database
$conn = new mysqli($host, $username_db, $password_db, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek username dan password di database
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Ambil data pengguna
    $user = $result->fetch_assoc();
    
    // Verifikasi password
    if ($password === $user['password']) { // Bandingkan password (plain text)
        // Login berhasil, redirect ke halaman admin
        header("Location: admin.php");
        exit();
    } else {
        // Password salah
        echo "<script>
            alert('Password salah!');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    // Username tidak ditemukan
    echo "<script>
        alert('Username tidak ditemukan!');
        window.location.href = 'login.php';
    </script>";
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>
