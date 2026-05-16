<?php

$host = "localhost";
$user = "root";
$pass = "123456";
$db = "belajarDb";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("ups periksa kembali username atau password" . mysqli_connect_error());
}

?>