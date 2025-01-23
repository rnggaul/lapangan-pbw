<?php
$conn = new mysqli('localhost', 'root', '', 'user_web');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete Data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM lapangan WHERE id_lapangan=$id";
    if (!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    }
}

// Fetch Data
$sql = "SELECT * FROM lapangan";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Dashboard Admin</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar ul li a:hover {
            background-color: #495057;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#" onclick="showSection('lapangan')">Lapangan</a></li>
            <!-- <li><a href="#" onclick="showSection('edit')">Edit</a></li> -->
            <li><a href="#" onclick="showSection('laporan')">Laporan Keuangan</a></li>
            <li><a href="#" onclick="confirmLogout()">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Lapangan Section -->
        <section id="lapangan" class="content-section active">
            <h1>Lapangan yang Tersedia</h1>
            <p>Menampilkan daftar lapangan yang tersedia.</p>
            <div class="mb-3">
                <a href="isilapangan.php" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Lapangan</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$row['nama_lapangan']}</td>
                                            <td>{$row['harga']}</td>
                                            <td>{$row['keterangan']}</td>
                                            <td>
                                                <a href='?delete={$row['id_lapangan']}' class='btn btn-danger btn-sm'>Delete</a>
                                            </td>
                                        </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center'>No Data Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Edit Section -->
        <!-- <section id="edit" class="content-section">
            <h1>Edit Harga dan Gambar Lapangan</h1>
            <form>
                <label for="harga">Harga Baru:</label>
                <input type="number" id="harga" placeholder="Masukkan harga baru">
                <br>
                <label for="gambar">Upload Gambar Baru:</label>
                <input type="file" id="gambar">
                <br>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </section> -->

        <!-- Laporan Keuangan Section -->
        <section id="laporan" class="content-section">
            <h1>Laporan Keuangan</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jumlah Pemasukan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01-01-2025</td>
                        <td>Rp 500.000</td>
                    </tr>
                    <tr>
                        <td>02-01-2025</td>
                        <td>Rp 700.000</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }

        function confirmLogout() {
            if (confirm("Apakah Anda yakin ingin logout?")) {
                window.location.href = 'index.php';
            }
        }
    </script>
</body>
</html>
