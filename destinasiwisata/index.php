<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./destinasi.css">
    <title>Destinasi Wisata</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
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
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Destinasi Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/views/tempatmakan.html">Tempat Makan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="/views/penginapan.html">Penginapan</a>
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
        <h1>Nikmati Keindahan Alam</h1>
        <h1>Kota Magetan</h1>
      </div>
    </div>
    <div class="container mx-auto pb-5">   
      <div class="card__container mx-auto mt-5 pb-5">
        <article class="card__article">
          <img src="/assets/telaga-sarangan- (2).jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Telaga Sarangan</h2>
            <a href="/views/telaga-sarangan.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="/assets/telaga-wahyu.jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Telaga Wahyu</h2>
            <a href="/views/telaga-wahyu.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="/assets/bukit-mongkrang.jpeg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Gunung Mongkrang</h2>
            <a href="/views/gunung-mongkrang.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="/assets/mojosemi-park.jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Mojosemi Park</h2>
            <a href="/views/mojosemi-park.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="/assets/geni-langit.jpeg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Geni Langit</h2>
            <a href="/views/geni-langit.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="/assets/Cemoro-Sewu.jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Cemoro Sewu</h2>
            <a href="/views/cemoro-sewu.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>   
    </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/38be933f5f.js" crossorigin="anonymous"></script>

    <footer>
      <p>&copy; copyright 2024 Kelompok 6 Pemrograman Web A-081</p>
      <p>
          <a href="/views/index.html">Home</a> |
          <a href="#about">About Us</a> |
          <a href="#contact">Contact</a>
      </p>
    </footer>
</body>

</html>

<!-- "container d-flex align-items-center justify-content-center fs-1 text-white flex-colum"> -->