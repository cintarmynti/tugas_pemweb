<?php session_start(); ?>
<?php include('../../functions/myfunctions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./tempatmakan.css">
</head>

<body>
    <?php include('../../includes/navbar.php') ?>
    <section id="homepage1">
    <div class="hero">
        <div class="contoh">
            <?php
                $wisata = getAll("kuliner");
                $id = 1;
                if (mysqli_num_rows($wisata) > 0) {
                    foreach ($wisata as $item) {
            ?>
            <div class="kelas">
                <img src="../../uploads/<?php echo $item['gambar']; ?>" alt="">
                <a href="../kuliner/detail-kuliner.php?id=<?= $item['id']; ?>"><div class="overlay"><?php echo $item['nama']; ?></div></a>
            </div>
            <?php
            }
        } else {
            echo "No records Found";
        }
        ?>
        </div>
    </div>
  </section>

  <section id="homepage2">
    <div class="backgorund2"></div>
  </section>

<?php include('../../includes/footer.php') ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>