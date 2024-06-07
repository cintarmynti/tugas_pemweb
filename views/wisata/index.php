<?php session_start(); ?>
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
    <?php include('../../includes/navbar.php') ?>

    <div class="container-fluid banner">
      <div class="content d-flex align-items-center justify-content-center fs-1 flex-column text-white">
        <h1>Nikmati Keindahan Alam</h1>
        <h1>Kota Magetan</h1>
      </div>
    </div>
    <div class="container mx-auto pb-5">   
      <div class="card__container mx-auto mt-5 pb-5">
        <article class="card__article">
          <img src="../../assets/img/telaga-sarangan- (2).jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Telaga Sarangan</h2>
            <a href="/views/telaga-sarangan.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="../../assets/img/telaga-wahyu.jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Telaga Wahyu</h2>
            <a href="/views/telaga-wahyu.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="../../assets/img/bukit-mongkrang.jpeg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Gunung Mongkrang</h2>
            <a href="/views/gunung-mongkrang.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="../../assets/img/mojosemi-park.jpg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Mojosemi Park</h2>
            <a href="/views/mojosemi-park.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="../../assets/img/geni-langit.jpeg" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title">Geni Langit</h2>
            <a href="/views/geni-langit.html" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>

        <article class="card__article">
          <img src="../../assets/img/Cemoro-Sewu.jpg" alt="" class="card__img">
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

<?php include('../../includes/footer.php') ?>

<!-- "container d-flex align-items-center justify-content-center fs-1 text-white flex-colum"> -->