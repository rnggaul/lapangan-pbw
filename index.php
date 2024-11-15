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
        <a href="#" class="navbar-logo">Lapangan Futsal Merdeka</a>
        <div class="navbar-nav">
            <a href="rent">Booking</a>
            <a href="about">About</a>
            <a href="facility">Facility</a>
            <a href="contact">Contact</a>
        </div>
        <!-- <div class="navbar-icon">
            <a href="#"><i data-feather="shopping-cart"></i></a>   
        </div> -->  
        <div class="navbar-button">
            <button class="tombol">Login</button>
            <button class="tombol">Daftar</button>
        </div>
    </nav>
    <!-- Hero Section Start -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Selamat Datang di <span>Lapangan Futsal</span> Merdeka</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos rerum totam earum ratione expedita id optio ullam facilis velit obcaecati? Vel at consectetur non nesciunt ex natus nostrum corporis alias.</p>
            <a href="#booking" class="hero-btn">Booking Sekarang</a>
        </div>
    </section>

    <section class="about">
        <h2>Tentang Kami</h2>
        <div class="about-row">
            <div class="about-img">
                <img src="images/about.jpg" alt="">
            </div>

            <div class="about-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatum sint nesciunt doloribus, laborum quasi eos amet explicabo numquam laboriosam et harum similique deleniti libero, totam sapiente quas assumenda voluptatibus!</p>
            </div>
        </div>
        

    </section>

    <!-- Fasilitas Section Start -->
    <section class="fasilitas">
        <h2 class="fasilitas-h2">Fasislitas Futsal Merdeka</h2>
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
    <script>
      feather.replace();
    </script>
</body>
</html>