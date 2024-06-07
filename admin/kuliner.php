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
    <h1 class="h3 mb-2 text-gray-800">Daftar Kuliner</h1>
    <p class="mb-4">Berikut ini adlah daftar tempat kuliner yang ada di Magetan</p>
    <a href="tambah-kuliner.php" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i></a>

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
                            <th>action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>alamat</th>
                            <th>jam_buka</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $kuliner = getAll("kuliner");
                        if (mysqli_num_rows($kuliner) > 0) {
                            foreach ($kuliner as $item) {
                        ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['nama']; ?></td>
                                    <td><?= $item['alamat']; ?></td>
                                    <td><?= $item['jam_buka']; ?></td>
                                    <td>
                                        <a class="btn btn-primary d-inline-block" href="edit-kuliner.php?id=<?= $item['id']; ?>">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="code.php" method="POST" class="d-inline-block">
                                            <input type="hidden" name="kuliner_id" value="<?= $item['id']; ?>">
                                            <button type="submit" name="delete_kuliner_btn" class="btn btn-danger">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>



                                </tr>
                        <?php
                            }
                        } else {
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