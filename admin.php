<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdmin.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#" onclick="showSection('lapangan')">Lapangan</a></li>
            <li><a href="#" onclick="showSection('edit')">Edit</a></li>
            <li><a href="#" onclick="showSection('laporan')">Laporan Keuangan</a></li>
            <li><a href="#" onclick="confirmLogout()">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <section id="lapangan" class="content-section">
            <h1>Lapangan yang Tersedia</h1>
            <p>Menampilkan daftar lapangan yang tersedia dan sudah disewa.</p>
        </section>

        <section id="edit" class="content-section" style="display: none;">
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
        </section>

        <section id="laporan" class="content-section" style="display: none;">
            <h1>Laporan Keuangan</h1>
            <table>
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

    <!-- Logout Confirmation Popup -->
    <div id="logoutPopup" class="popup">
        <div class="popup-content">
            <h2>Konfirmasi Logout</h2>
            <p>Apakah Anda yakin ingin logout?</p>
            <button onclick="performLogout()">Ya</button>
            <button onclick="closePopup()">Tidak</button>
        </div>
    </div>

    <script>
        // Function to show sections dynamically
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.style.display = 'none');
            document.getElementById(sectionId).style.display = 'block';
        }

        // Function to show the logout confirmation popup
        function confirmLogout() {
            document.getElementById('logoutPopup').style.display = 'block';
        }

        // Function to close the popup
        function closePopup() {
            document.getElementById('logoutPopup').style.display = 'none';
        }

        // Function to perform the logout
        function performLogout() {
            window.location.href = 'index.php'; // Redirect to the logout page
        }
    </script>
</body>
</html>
