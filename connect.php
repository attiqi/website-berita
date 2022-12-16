<?php
    $servername = "localhost";
    $database   = "news";
    $username   = "root";         
    $password   = "";         
    
    $koneksi_server = mysqli_connect($servername, $username, $password, $database);
    
    if (!$koneksi_server) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>