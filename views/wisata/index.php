<?php include('../../functions/myfunctions.php') ?>

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
    <section>
    <div class="container-fluid banner">
      <div class="content d-flex align-items-center justify-content-center fs-1 flex-column text-white">
        <h1>Nikmati Keindahan Alam</h1>
        <h1>Kota Magetan</h1>
      </div>
    </div>
    <div class="container mx-auto pb-5">   
      <div class="card__container mx-auto mt-5 pb-5">
      <?php
        $wisata = getAll("wisata");
        $id = 1;
        if (mysqli_num_rows($wisata) > 0) {
            foreach ($wisata as $item) {
      ?>
        <article class="card__article">
        <img src="../../uploads/<?php echo $item['gambar']; ?>" alt="" class="card__img">
          <div class="card__data">
            <span class="card__description"></span>
            <h2 class="card__title"><?php echo $item['nama']; ?></h2>
            <a href="../wisata/detail.php?=<?= $item['id']; ?>" class="card__button">Baca Selengkapnya</a>
          </div>
        </article>
        <?php
            }
        } else {
            echo "No records Found";
        }
        ?>
       
    </div> 
    </div>
    </section>
    

    <?php include('../../includes/footer.php') ?>

    </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/38be933f5f.js" crossorigin="anonymous"></script>



<!-- "container d-flex align-items-center justify-content-center fs-1 text-white flex-colum"> -->