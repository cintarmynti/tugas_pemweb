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
    }else if(isset($_POST['update_wisata_btn'])){
        $wisata_id = $_POST['wisata_id'];
        $nama = $_POST['nama'];
        $desc = $_POST['desc'];
        $alamat = $_POST['alamat'];
        $htm = $_POST['htm'];
        $jam_buka = $_POST['jam_buka'];
        $kontak = $_POST['kontak'];
        $kategori = $_POST['kategori'];

        $new_image = $_FILES['gambar']['name'];
        $old_image = $_POST['old_image'];

        if($new_image != ''){
            // $update_filename = $new_image;
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }else{
            $update_filename = $old_image;
        }

        $path = "../uploads";


        $update_query = "UPDATE wisata SET nama='$nama', `desc`='$desc', alamat='$alamat', htm='$htm', jam_buka='$jam_buka', kontak='$kontak', kategori='$kategori', gambar='$update_filename' WHERE id='$wisata_id'";

        $update_query_run = mysqli_query($con, $update_query);

        if($update_query_run)
        {
            echo "masuk gais";
            if($_FILES['gambar']['name'] != "")
            {
                move_uploaded_file($_FILES['gambar']['tmp_name'], $path.'/'.$update_filename);
                if(file_exists("../uploads/".$old_image))
                {
                    unlink("../uploads/".$old_image);
                }
            }
            redirect("edit-wisata.php?id=$wisata_id", "Category Updated Successfully");
        }else
        {
            redirect("edit-wisata.php?id=$wisata_id", "Category Went Wrong");

        }


    }

?>