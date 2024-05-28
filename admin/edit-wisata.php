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
                    $wisata = getById("wisata", $id);
                    if (mysqli_num_rows($wisata) > 0) {
                        $data = mysqli_fetch_array($wisata);
                ?>
                        <div class="card">
                            <div class="card-header">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">EDIT WISATA</h1>

                                </div>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="wisata_id" value="<?= $data['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="nama">Nama</label>
                                            <input type="text" value="<?= $data['nama']; ?>" name="nama" class="form-control" id="nama">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" value="<?= $data['alamat']; ?>" name="alamat" class="form-control" id="alamat">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="htm">HTM</label>
                                            <input type="text" value="<?= $data['htm']; ?>" name="htm" class="form-control" id="htm">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="jam_buka">Jam Buka</label>
                                            <input type="text" name="jam_buka" value="<?= $data['jam_buka']; ?>" class="form-control" id="jam_buka">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="kontak">Kontak</label>
                                            <input type="text" name="kontak" value="<?= $data['kontak']; ?>" class="form-control" id="kontak">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" name="kategori" value="<?= $data['kategori']; ?>" class="form-control" id="kategori">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" name="gambar" class="form-control" id="gambar">
                                            <input type="hidden" name="old_image" value="<?= $data['gambar']; ?>">
                                            <img src="../uploads/<?= $data['gambar']; ?>" class="mb-2 mt-2" width="100px" alt="Gambar Wisata">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <label for="desc">Deskripsi</label>
                                            <textarea name="desc" class="form-control" id="desc"><?= $data['desc']; ?></textarea>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary" name="update_wisata_btn">Update</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                <?php
                    } else {
                        echo "Wisata not found";
                    }
                } else {
                    echo "id missing from ur url";
                }

                ?>
            </div>
        </div>
    </div>

</div>

<?php include('includes/footer.php') ?>
<?php include('includes/scripts.php') ?>