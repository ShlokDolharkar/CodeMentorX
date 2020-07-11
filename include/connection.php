<?php
	
    $host_name  = "localhost";
    $database   = "codementor";
    $user_name  = "root";
    $password   = "";


    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if($connect->connect_error)
    {
        die("connect failed: " . $connect->connect_error);
    }
    
?>