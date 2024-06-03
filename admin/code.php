<?php 

    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunctions.php');
    if(isset($_POST['tambah_wisata_btn'])){
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
            
            redirect("edit-wisata.php?id=$wisata_id", "wisata Updated Successfully");
        }else
        {
            redirect("edit-wisata.php?id=$wisata_id", "wisata Went Wrong");

        }


    }else if(isset($_POST['delete_wisata_btn'])){
        $wisata_id = mysqli_real_escape_string($con, $_POST['wisata_id']);

        $wisata_query = "SELECT * FROM wisata WHERE id='$wisata_id'";
        $wisata_query_run = mysqli_query($con, $wisata_query);
        $wisata_data = mysqli_fetch_array($wisata_query_run);
        $image = $wisata_data['gambar'];

        $delete_query = "DELETE FROM wisata WHERE id='$wisata_id'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if($delete_query_run)
        {   
            if(file_exists("../uploads/".$image))
            {
                unlink("../uploads/".$image);
            }
            redirect("wisata.php", "Wisata Deleted Successfully");
               
        }else{
            redirect("wisata.php", "Something went wrong");

        }
    }else if(isset($_POST['tambah_kuliner_btn'])){
        $nama = $_POST['nama'];
        $kontak = $_POST['kontak'];
        $kategori = $_POST['kategori'];
        $jam_buka = $_POST['jam_buka'];
        $desc = $_POST['desc'];
        $alamat = $_POST['alamat'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $gambar = $_FILES['gambar_kuliner']['name'];

        $path = "../uploads";
        
        $image_ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $kuliner_query = "INSERT INTO kuliner (nama,`desc`,gambar,jam_buka,kontak,kategori,alamat,metode_pembayaran) VALUES ('$nama', '$desc','$filename','$jam_buka', '$kontak','$kategori','$alamat','$metode_pembayaran')";

        $kuliner_query_run = mysqli_query($con, $kuliner_query);
        if($kuliner_query_run)
        {
            move_uploaded_file($_FILES['gambar_kuliner']['tmp_name'], $path.'/'.$filename);
            redirect("tambah-kuliner.php", "Kuliner added success");
        }else
        {
            redirect("tambah-kuliner.php", "Something went wrong");
        }
    }else if(isset($_POST['update_kuliner_btn'])){
        $kuliner_id = $_POST['kuliner_id'];
        var_dump($kuliner_id);
        $nama = $_POST['nama'];
        $kontak = $_POST['kontak'];
        $kategori = $_POST['kategori'];
        $jam_buka = $_POST['jam_buka'];
        $desc = $_POST['desc'];
        $alamat = $_POST['alamat'];
        $metode_pembayaran = $_POST['metode_pembayaran'];


        $new_image = $_FILES['gambar_kuliner']['name'];
        $old_image = $_POST['old_image'];

        print_r($_POST);
        print_r($_FILES['gambar_kuliner']);

        if($new_image != ''){
            // $update_filename = $new_image;
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }else{
            $update_filename = $old_image;
        }

        $path = "../uploads";


        $update_query = "UPDATE kuliner SET nama='$nama', kontak='$kontak', kategori='$kategori', jam_buka='$jam_buka', `desc`='$desc', alamat='$alamat', metode_pembayaran='$metode_pembayaran', gambar='$update_filename' WHERE id='$kuliner_id'";

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
            
            redirect("edit-kuliner.php?id=$kuliner_id", "kuliner Updated Successfully");
        }else
        {
            redirect("edit-kuliner.php?id=$kuliner_id", "kuliner Went Wrong");

        }
    }else if(isset($_POST['delete_kuliner_btn'])){
        $kuliner_id = mysqli_real_escape_string($con, $_POST['kuliner_id']);

        $kuliner_query = "SELECT * FROM kuliner WHERE id='$kuliner_id'";
        $kuliner_query_run = mysqli_query($con, $kuliner_query);
        $kuliner_data = mysqli_fetch_array($kuliner_query_run);
        $image = $kuliner_data['gambar'];

        $delete_query = "DELETE FROM kuliner WHERE id='$kuliner_id'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if($delete_query_run)
        {   
            if(file_exists("../uploads/".$image))
            {
                unlink("../uploads/".$image);
            }
            redirect("kuliner.php", "kuliner Deleted Successfully");
               
        }else{
            redirect("kuliner.php", "Something went wrong");

        }
    }else if(isset($_POST['tambah_penginapan_btn'])){
        $nama = $_POST['nama'];
        $desc = $_POST['desc'];
        $alamat = $_POST['alamat'];
        $gambar = $_FILES['gambar_penginapan']['name'];
        $kontak = $_POST['kontak'];
        $fasilitas = $_POST['fasilitas'];
       

        $path = "../uploads";
        
        $image_ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $penginapan_query = "INSERT INTO penginapan (nama,`desc`,alamat,gambar,kontak,fasilitas) VALUES ('$nama', '$desc','$alamat','$filename', '$kontak','$fasilitas')";

        $penginapan_query_run = mysqli_query($con, $penginapan_query);
        if($penginapan_query_run)
        {
            move_uploaded_file($_FILES['gambar_penginapan']['tmp_name'], $path.'/'.$filename);
            redirect("tambah-penginapan.php", "penginapan added success");
        }else
        {
            redirect("tambah-penginapan.php", "Something went wrong");
        }
    }else if(isset($_POST['update_penginapan_btn'])){
        $penginapan_id = $_POST['penginapan_id'];
        $nama = $_POST['nama'];
        $kontak = $_POST['kontak'];
        $alamat = $_POST['alamat'];
        $fasilitas = $_POST['fasilitas'];
        $desc = $_POST['desc'];

        $new_image = $_FILES['gambar_penginapan']['name'];
        $old_image = $_POST['old_image'];

        if($new_image != ''){
            // $update_filename = $new_image;
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }else{
            $update_filename = $old_image;
        }

        $path = "../uploads";


        $update_query = "UPDATE penginapan SET nama='$nama', kontak='$kontak', alamat='$alamat', fasilitas='$fasilitas', `desc`='$desc',  gambar='$update_filename' WHERE id='$penginapan_id'";

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
            
            redirect("edit-penginapan.php?id=$penginapan_id", "penginapan Updated Successfully");
        }else
        {
            redirect("edit-penginapan.php?id=$penginapan_id", "penginapan Went Wrong");

        }
    }else if(isset($_POST['delete_penginapan_btn'])){
        $penginapan_id = mysqli_real_escape_string($con, $_POST['penginapan_id']);

        $penginapan_query = "SELECT * FROM penginapan WHERE id='$penginapan_id'";
        $penginapan_query_run = mysqli_query($con, $penginapan_query);
        $penginapan_data = mysqli_fetch_array($penginapan_query_run);
        $image = $penginapan_data['gambar'];

        $delete_query = "DELETE FROM penginapan WHERE id='$penginapan_id'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if($delete_query_run)
        {   
            if(file_exists("../uploads/".$image))
            {
                unlink("../uploads/".$image);
            }
            redirect("penginapan.php", "penginapan Deleted Successfully");
               
        }else{
            redirect("penginapan.php", "Something went wrong");

        }
    }

?>