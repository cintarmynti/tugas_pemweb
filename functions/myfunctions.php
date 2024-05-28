<?php

    include("../config/dbcon.php");

  

    function redirect($url, $message){
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit();
    }

    function getAll($table){
        global $con;
        $query = "SELECT * FROM $table";
        $query_run = mysqli_query($con, $query);

        if (!$query_run) {
            die("Query error: " . mysqli_error($con));
        }
        
        return $query_run;
    }

    function getById($table, $id){
        global $con;
        $query = "SELECT * FROM $table WHERE id = $id";
        $query_run = mysqli_query($con, $query);
        
        if (!$query_run) {
            die("Query error: " . mysqli_error($con));
        }
        
        return $query_run;
    }

?>