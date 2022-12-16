<?php
session_start();
include 'connect.php';
unset($_SESSION['HAK']);
header('location:http://localhost/Finalpro/index.php')
?>