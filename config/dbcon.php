<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wisata_magetan";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con)
    {
        die("Connection Failed: ".mysqli_connect_error());
    }else{
        echo "Connect succesfuly";
    }

?>