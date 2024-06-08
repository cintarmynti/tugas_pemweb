<?php session_start(); ?>
<?php include('../../functions/myfunctions.php') ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penginapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./penginapan.css">
</head>

<body>
    <?php include('../../includes/navbar.php') ?>

    <div class="container-fluid banner">
        <div class="content d-flex align-items-center justify-content-center fs-1 flex-column text-white">
          <h1>Nikmati Liburan tak Terlupakan</h1>
          <h1>Kota Magetan</h1>
        </div>
      </div>
    
    <section class="section__container popular__container">
        <h2 class="section__header">Penginapan</h2>
        <div class="popular__grid">
        <?php
          $penginapan = getAll("penginapan");
          $id = 1;
          if (mysqli_num_rows($penginapan) > 0) {
              foreach ($penginapan as $item) {
        ?>
          <div class="popular__card">
            <a href="https://maps.app.goo.gl/ArcggYuHAMznQWNR9"><img src="../../uploads/<?php echo $item['gambar']; ?>" alt="popular hotel" /></a>
            <div class="popular__content">
              <div class="popular__card__header">
                <h4><?php echo $item['nama']; ?></h4>
              </div>
              <p><?php echo $item['alamat']; ?></p>
            </div>
          </div>
          <?php
            }
        } else {
            echo "No records Found";
        }
        ?>
        </div>
      </section>
  
    <br>

    <footer>
        <p>&copy; copyright 2024 Kelompok 6 Pemrograman Web A-081</p>
    </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>