<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "database";

$connect = mysqli_connect($server, $user, $password, $db);
if (!$connect){
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}
?>