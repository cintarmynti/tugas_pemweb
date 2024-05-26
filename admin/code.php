<?php 

    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunctions.php');
    if(isset($_POST['tambah_wisata_btn']))
    {
        $nama = $_POST['nama'];
        $desc = $_POST['desc'];
        $alamat = $_POST['alamat'];
        $htm = $_POST['htm'];
        $jam_buka = $_POST['jam_buka'];
        $kontak = $_POST['kontak'];
        $kategori = $_POST['kategori'];

        $gambar = $_FILES['gambar']['name'];

        $path = "../uploads";

        $image_ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $cate_query = "INSERT INTO wisata (nama,`desc`,alamat,gambar,htm,jam_buka,kontak,kategori) VALUES ('$nama', '$desc', '$alamat', '$filename', '$htm', '$jam_buka', '$kontak', '$kategori')";

        $cate_query_run = mysqli_query($con, $cate_query);

        if($cate_query_run){
            move_uploaded_file($_FILES['gambar']['tmp_name'], $path.'/'.$filename);
            redirect("tambah-wisata.php", "Wisata added success");

        }else{
            redirect("tambah-wisata.php", "Something went wrong");
        }
    }

?>