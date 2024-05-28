<!-- ini  header -->
<?php 
        include('includes/header.php');
        include('../middleware/adminMiddleware.php');
    ?>
    <?php include('includes/sidebar.php') ?>
    <?php include('includes/navbar.php') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tempat Wisata</h1>
                    <p class="mb-4">Berikut ini adlah daftar tempat wisata yang ada di Magetan</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
                                            <th>jam_buka</th>
                                            <th>htm</th>
                                            <th>kontak</th>
                                            <th>kategori</th>
                                            <th>desc</th>
                                            <th>gambar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
                                            <th>jam_buka</th>
                                            <th>htm</th>
                                            <th>kontak</th>
                                            <th>kategori</th>
                                            <th>desc</th>
                                            <th>gambar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                                $wisata = getAll("wisata");
                                                if(mysqli_num_rows($wisata) > 0)
                                                {   
                                                    foreach($wisata as $item){                                                        
                                                    ?>
                                                        <tr>
                                                            <td><?= $item['id']; ?></td>
                                                            <td><?= $item['nama']; ?></td>
                                                            <td><?= $item['alamat']; ?></td>
                                                            <td><?= $item['jam_buka']; ?></td>
                                                            <td><?= $item['htm']; ?></td>
                                                            <td><?= $item['kontak']; ?></td>
                                                            <td><?= $item['desc']; ?></td>
                                                            <td><?= $item['kategori']; ?></td>
                                                            <td><img src="../uploads/<?= $item['gambar']; ?>" width="50px" alt=""></td>

                                                        </tr>
                                                    <?php
                                                      }
                                                }else{
                                                    echo "No records Found";
                                                }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            <?php include('includes/footer.php') ?>
            <?php include('includes/scripts.php') ?>