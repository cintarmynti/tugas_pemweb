<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penginapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./penginapan.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top mx-auto">
        <div class="container-fluid">
          <a class="navbar-brand me-auto" href="#">Magetan</a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Magetan Travel Guide</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-auto">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="/views/destinasiwisata.html">Destinasi Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/views/tempatmakan.html">Tempat Makan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" href="penginapan.html">Penginapan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 " href="/views/index.html">Beranda</a>
                </li>
              </ul>
            </div>
            
          </div>
          <a href="#" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid banner">
        <div class="content d-flex align-items-center justify-content-center fs-1 flex-column text-white">
          <h1>Nikmati Liburan tak Terlupakan</h1>
          <h1>Kota Magetan</h1>
        </div>
      </div>
    
    <section class="section__container popular__container">
        <h2 class="section__header">Penginapan</h2>
        <div class="popular__grid">
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/ArcggYuHAMznQWNR9"><img src="/assets/Penginapan Maospati 2.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>Penginapan Maospati</h4>
              </div>
              <p>Jalan Raya Solo RW. 06, RT.06/RW.01, Sanggrahan, Kec. Maospati, Kabupaten Magetan, Jawa Timur 63392</p>
            </div>
          </div>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/sfWMY4swwEBQPcu49"><img src="/assets/Econique Sarangan Resort.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>Econique Sarangan Resort</h4>
              </div>
              <p>Jl. Lkr. Telaga, RT.006 Rw001, Telaga Pasir, Sarangan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361</p>
            </div>
          </div>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/BLwvspXEXXYXc7ib9"><img src="/assets/Mapan guest house.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>Mapan Guest House</h4>
              </div>
              <p>Jl. Samudra No.58, Dusun Carat, Bulukerto, Kec. Magetan, Kabupaten Magetan, Jawa Timur 63351</p>
            </div>
          </div>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/hMYgx7pbbj3zPhG16"><img src="/assets/Villa adem ayem.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>Villa Adem Ayem</h4>
              </div>
              <p>JL Telaga Sarangan, RT. 06 RW. 01, Sarangan, Sarangan I, Sarangan, Magetan, Kabupaten Magetan, Jawa Timur 63361</p>
            </div>
          </div>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/HF6rtZp2wGKrZVxb6"><img src="/assets/1094080844_WxH.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>OYO Oemah Djowo Resort</h4>
              </div>
              <p>Jalan Raya Sarangan RT.01/RW.01, Sarangan I, Sarangan, Kec. Tawangmangu, Kabupaten Magetan, Jawa Timur 63361</p>
            </div>
          </div>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/4GEdYSrLejvcXQ6D7"><img src="/assets/OYO 1773 Ilyasa Family.jpg" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4>OYO Telaga Mas</h4>
              </div>
              <p> Jl. Raya Telaga Sarangan, RT.07/RW.01, Ngluweng, Sarangan, Kec. Plaosan, Kabupaten Magetan, Jawa Timur 63361</p>
            </div>
          </div>
        </div>
      </section>
  
    <br>

    <footer>
        <p>&copy; copyright 2024 Kelompok 6 Pemrograman Web A-081</p>
        <p>
            <a href="#home">Home</a> |
            <a href="#about">About Us</a> |
            <a href="#contact">Contact</a>
        </p>
    </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>