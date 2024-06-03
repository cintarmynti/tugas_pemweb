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
                <div class="card">
                    <div class="card-header">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">TAMBAHKAN PENGINAPAN</h1>

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                            
                                <div class="col-md-6">
                                    <label for="">kontak</label>
                                    <input type="text" name="kontak" class="form-control" id="">
                                </div>
                            
                                <div class="col-md-6 mt-3">
                                    <label for="">alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">fasilitas</label>
                                    <input type="text" name="fasilitas" class="form-control" id="">
                                </div>
                               
                                <div class="col-md-6 mt-3">
                                    <label for="">Gambar</label>
                                    <input type="file" name="gambar_penginapan" class="form-control" id="">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Desc</label>
                                    <textarea name="desc" class="form-control" id=""></textarea>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="tambah_penginapan_btn">Save</button>
                                </div>    
                               
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('includes/footer.php') ?>
<?php include('includes/scripts.php') ?>