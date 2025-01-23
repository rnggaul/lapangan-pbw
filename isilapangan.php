<?php
$conn = new mysqli('localhost', 'root', '', 'user_web');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add Data
if (isset($_POST['add'])) {
    $nama = $_POST['nama_lapangan'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO lapangan (nama_lapangan, harga, keterangan) VALUES ('$nama', '$harga', '$keterangan')";
    if (!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    }
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
    <title>Menambahkan Lapangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Menambahkan Lapangan</h1>

        <!-- Add Data Form -->
        <div class="card mb-4">
            <div class="card-header">Add Data</div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lapangan</label>
                        <input type="text" class="form-control" id="name" name="nama_lapangan" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

        <!-- Display Data -->
        <div class="card mb-4">
            <div class="card-header">
                Data List
                <!-- Back Button -->
                <a href="admin.php" class="btn btn-secondary btn-sm float-end">Kembali ke Admin</a>
            </div>
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
                            echo "<tr><td colspan='5' class='text-center'>No Data Found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
