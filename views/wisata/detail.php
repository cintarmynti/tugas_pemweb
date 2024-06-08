<?php include('../../functions/myfunctions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./destinasi.css">
    <style>
        .judul {
            text-transform: capitalize;
            font-size: 48px;
            font-weight: bold;
            text-align: center;
            margin-top: 110px;
        }

        .body {
            display: flex;
            flex-direction: column;
            align-items: center; /* Untuk memastikan semua konten di dalam .body berada di tengah */
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 4rem;
        }

        .body .cover {
            max-width: 100%;
            height: 450px;
            object-fit: cover;
            margin-top: 1rem;
        }

        .img-center {
            display: flex;
            justify-content: center;
            width: 100%; /* Pastikan lebar penuh untuk perataan gambar */
        }

        .text-left {
            text-align: left;
            width: 100%;
            max-width: 800px; /* Tentukan lebar maksimal */
            padding-left: 5rem; /* Menambahkan padding kiri */
            padding-right: 5rem; /* Menambahkan padding kanan */
            margin-left: auto;
            margin-right: auto;
            padding-top: 1rem;
        }

        .sub-judul{
            font-weight: bold;
        }

        .icon{
            width: 30px;
            height: 30px;
        }

        .sub-menu{
            display: flex;
        }

        .text-span{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include('../../includes/navbar.php'); ?>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $wisata = getById("wisata", $id);
        if (mysqli_num_rows($wisata) > 0) {
            $data = mysqli_fetch_array($wisata);
    ?>
            <div class="body">
                <div class="mt-1 text-center">
                    <h2 class="judul"><?= $data['nama']; ?></h2>
                </div>
                <div class="img-center">
                    <img class="cover" src="../../uploads/<?= $data['gambar']; ?>" alt="">
                </div>
                <div class="text-left">
                    <p class="sub-judul">Tentang <?= $data['nama']; ?></p>
                    <p><?= $data['desc']; ?></p>
                    <p class="sub-judul">Informasi Wisata</p>
                    <div class="sub-menu">
                        <img class="icon" src="../../assets/icons/location.png" alt="">
                        <p><span class="text-span">Alamat: </span><?= $data['alamat']; ?></p>
                    </div>
                    <div class="sub-menu">
                        <img class="icon" src="../../assets/icons/dollar-square.png" alt="">
                        <p><span class="text-span">HTM: </span>Rp <?= number_format($data['htm']); ?></p>
                    </div>
                    <div class="sub-menu">
                        <img class="icon" src="../../assets/icons/clock.png" alt="">
                        <p><span class="text-span">Alamat: </span><?= $data['jam_buka']; ?></p>
                    </div>
                    <div class="sub-menu">
                        <img class="icon" src="../../assets/icons/signpost.png" alt="">
                        <p><span class="text-span">Alamat: </span><?= $data['kategori']; ?></p>
                    </div>
                </div>
            </div>
    <?php
        } else {
            echo "<div class='container mt-4'><div class='alert alert-warning'>Wisata tidak ditemukan.</div></div>";
        }
    } else {
        echo "<div class='container mt-4'><div class='alert alert-warning'>ID tidak ditemukan di URL.</div></div>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
