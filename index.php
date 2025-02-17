<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
    
</head>
<body>
    <!-- navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">PrimeSport Center</a>
        <div class="navbar-nav">
            <a href="booking.php">Booking</a>
            <a href="#about">About</a>
            <a href="#facility">Facility</a>
            <a href="#contact">Contact</a>
        </div>
        <!-- <div class="navbar-icon">
            <a href="#"><i data-feather="shopping-cart"></i></a>   
        </div> -->  
        <div class="navbar-button">
            <a href="login.php"><button href="login.php" class="tombol">Login</button></a>
            <button class="tombol">Daftar</button>
        </div>
    </nav>
    <!-- Hero Section Start -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Selamat Datang di <span>PrimeSport</span> Center</h1>
            <p>Nikmati pengalaman bermain olahraga terbaik di PrimeSport Center! Dengan fasilitas modern dan suasana yang nyaman, kami siap mendukung performa terbaik Anda di setiap permainan.</p>
            <a href="booking.php" class="hero-btn">Booking Sekarang</a>
        </div>
    </section>

    <section id="about" class="about">
        <h2>Tentang Kami</h2>
        <div class="about-row">
            <div class="about-img">
                <img src="images/about.jpg" alt="">
            </div>

            <div class="about-content">
                <p>PrimeSport Center hadir untuk mendukung gaya hidup aktif Anda dengan menyediakan fasilitas olahraga terbaik. Dari lapangan yang berkualitas hingga suasana yang nyaman, kami berkomitmen menjadi pilihan utama untuk setiap momen olahraga Anda. Bergabunglah dengan komunitas kami dan rasakan semangat olahraga di sini!</p>
            </div>
        </div>
        

    </section>

    <!-- Fasilitas Section Start -->
    <section id="facility" class="fasilitas">
        <h2 class="fasilitas-h2">PrimeSport Center</h2>
        <div class="card-fasilitas">
            <img src="parkiran.jpg" alt="">
        </div>
        <div class="card-content">
            <div>
                <img src="images/parkiran.jpg" alt="">
                <h3>Parkiran</h3>
            </div>
            <div>
                <img src="images/ruang-ganti.jpg" alt="">
                <h3>Ruang Ganti</h3>
            </div>
            <div>
                <img src="images/tribun.jpg" alt="">
                <h3>Tribun Penonton</h3>
            </div>
            
        </div>
    </section>

    <!-- Contact Section Start -->

    <section id="contact" class="contact">
      <h2><span>kontak</span> Kami</h2>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.321872550367!2d106.91256597586217!3d-6.352359693637542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993d1a8fac363%3A0x63e48637f4b8e65d!2sJl.%20Pangkalan%20IX%20No.59%208%2C%20RT.8%2FRW.4%2C%20Pd.%20Ranggon%2C%20Kec.%20Cipayung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013860!5e0!3m2!1sen!2sid!4v1724820708986!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
    </section>

    <!-- Footer Start -->
    <footer class="footer">
      <div class="socials">
        <a href="https://www.instagram.com/rnggaul/"
          ><i data-feather="instagram"></i
        ></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#facility">Fasilitas</a>
        <a href="#contact">kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="https://github.com/rnggaul">Rangga Aulia</a>. |&copy; 2024.</p>
      </div>
    </footer>
    <script>
      feather.replace();
    </script>
</body>
</html>