<?php

include 'koneksi.php';
$dashboard = file_get_contents("dashboard.php");

$nama = $_POST['nama'];
$pw = $_POST['password'];


if($nama == '' || $pw == ''){
    echo "<script>
            alert('wajib iti semua data');
            window.history.back();
        </script>";
    }else {
        $query = "SELECT * FROM users WHERE nama='$nama'";
        $terdaftar = mysqli_query($koneksi, $query);

        if(mysqli_num_rows($terdaftar) > 0){
            $dataUser = mysqli_fetch_assoc($terdaftar);

            if(password_verify($pw, $dataUser['password'])){
                echo $dashboard;
                // echo "<span id='user' data-username='$nama'></span>";
            }else{
                echo "<script>alert('ups nama dan password mungkin salah');window.history.back();</script>";
            }
        }
    }



?>