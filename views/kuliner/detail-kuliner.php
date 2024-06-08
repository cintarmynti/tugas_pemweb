<?php include('../../functions/myfunctions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../wisata/destinasi.css">
  <style>
        img {
            border: 2px solid #53721D;
            border-radius: 25px; /* Sudut bulat dengan radius 25px */
            box-shadow: 0 4px 8px rgba(83, 114, 29, 0.5);
        }

        .judul {
            text-transform: capitalize;
        }

        ul li{
            list-style: none;
        }

        li{
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <?php include('../../includes/navbar.php'); ?>
    <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $kuliner = getById("kuliner", $id);
            if (mysqli_num_rows($kuliner) > 0) {
                $data = mysqli_fetch_array($kuliner);
    ?>
    <div class="container mt-3">
        <div class="row w-100">
            <div class="col-md-6">
                <img src="../../uploads/<?= $data['gambar']; ?>" alt="Location Image" class="location-image">
            </div>
            <div class="col-md-6 d-flex flex-column">
                <h1 class="fw-bold judul"><?= $data['nama']; ?></h1>
                <ul>
                    <li>Jam Buka  <?= $data['jam_buka']; ?></li>
                    <li>Kategori <?= $data['kategori'];  ?></li>
                    <li>Alamat <?= $data['alamat'];  ?></li>
                    <li>Deskripsi  <?= $data['desc']; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
            } else {
                echo "Kulliner not found";
            }
        } else {
            echo "ID missing from URL";
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
