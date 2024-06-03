<!-- ini  header -->
<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');
?>
<?php include('includes/sidebar.php') ?>
<?php include('includes/navbar.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kuliner = getById("kuliner", $id);
                    if (mysqli_num_rows($kuliner) > 0) {
                        $data = mysqli_fetch_array($kuliner);
                ?>
                        <div class="card">
                            <div class="card-header">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">EDIT KULINER</h1>

                                </div>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="kuliner_id" value="<?= $data['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Nama</label>
                                            <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" id="">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">kontak</label>
                                            <input type="text" name="kontak" value="<?= $data['kontak']; ?>" class="form-control" id="">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="">alamat</label>
                                            <input type="text" name="alamat" value="<?= $data['alamat']; ?>" class="form-control" id="">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="">Jam Buka</label>
                                            <input type="text" name="jam_buka" value="<?= $data['jam_buka']; ?>" class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="">kategori</label>
                                            <input type="text" name="kategori" value="<?= $data['kategori']; ?>" class="form-control" id="">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="">metode pembayaran</label>
                                            <input type="text" name="metode_pembayaran" value="<?= $data['metode_pembayaran']; ?>" class="form-control" id="">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="">Gambar</label>
                                            <input type="file" name="gambar_kuliner" class="form-control" id="">
                                            <input type="hidden" name="old_image" value="<?= $data['gambar']; ?>">
                                            <img src="../uploads/<?= $data['gambar']; ?>" class="mb-2 mt-2" width="100px" alt="Gambar Wisata">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="">Desc</label>
                                            <textarea name="desc" class="form-control" id=""><?= $data['desc']; ?></textarea>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" name="update_kuliner_btn">Update</button>
                                        </div>


                                    </div>
                                </form>

                            </div>
                        </div>
            </div>
    <?php
                    } else {
                        echo "kulliner not found";
                    }
                } else {
                    echo "id missing from ur url";
                }

    ?>
        </div>
    </div>
</div>


<?php include('includes/scripts.php') ?>
<?php include('includes/footer.php') ?>