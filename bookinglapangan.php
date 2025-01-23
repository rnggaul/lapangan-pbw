<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lapangan</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Kustomisasi tombol untuk memastikan tampilan konsisten */
        .btn {
            padding: 0.5rem 1rem; /* Tambahkan padding agar tombol terlihat lebih proporsional */
            font-size: 1rem;      /* Pastikan ukuran font tombol proporsional */
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Lapangan Futsal Merdeka</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link active" href="booking.html">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Facility</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-danger btn-sm mx-2">Login</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-danger btn-sm mx-2">Daftar</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5">
    <h2 class="text-center mb-4">Booking Lapangan</h2>
    <form id="booking" action="https://formspree.io/f/xldgenlr" method="POST">
    <form action="process_booking.php" method="POST">
        <div class="mb-3">
            <label for="venue" class="form-label">Pilih Lapangan</label>
            <select class="form-select" id="venue" name="venue" required>
                <option value="Lapangan Generasi Baru">Lapangan Futsal Sintetis</option>
                <option value="Ace Tennis">Lapangan Tennis Indoor</option>
                <option value="Politeknik Sahid Kampus Roxy B">Lapangan Badminton 1</option>
                <option value="Politeknik Sahid Kampus Roxy B">Lapangan Badminton 2</option>
                <option value="Politeknik Sahid Kampus Roxy B">Lapangan Mini Soccer</option>
                <option value="Politeknik Sahid Kampus Roxy B">Lapangan Basket</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Pilih Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Pilih Waktu</label>
            <select class="form-select" id="time" name="time" required>
                <option value="08:00 - 09:00">08:00 - 09:00</option>
                <option value="09:00 - 10:00">09:00 - 10:00</option>
                <option value="10:00 - 11:00">10:00 - 11:00</option>
                <option value="11:00 - 12:00">11:00 - 12:00</option>
                <option value="13:00 - 14:00">13:00 - 14:00</option>
                <option value="14:00 - 15:00">14:00 - 15:00</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
    </form>
    </form>
</div>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 PrimeSport Center. All Rights Reserved.</p>
</footer>

<script>
    feather.replace();
</script>
</body>
</html>
