<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$pw = $_POST['password'];

    $query = "SELECT * FROM users WHERE nama='$nama' AND password='$pw'";
    $terdaftar = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($terdaftar) > 0){
        echo "<h3>Selamat $nama berhasil login</h3>";
        echo "<a href='index.php'>kembali ke halaman form</a>";
    }else {
        echo "gagal menyimpan" . mysqli_error($koneksi);
    }



?>