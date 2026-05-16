<?php

include 'koneksi.php';

$namaNew = $_POST['namaNew'];
$statusNew = $_POST['statusNew'];
$pwNew = $_POST['passwordNew'];

if($namaNew == "" || $pwNew == ""){
    echo "<script>alert('cek kembali nama dan password mu, pastikan terisi');
            window.history.back();
        </script>";
    
}else {
    $passwordHash = password_hash($pwNew, PASSWORD_DEFAULT);
    $queryNew = "INSERT INTO users (nama, status, password) VALUES ('$namaNew', '$statusNew', '$passwordHash')";

    if(mysqli_query($koneksi, $queryNew)){
        echo "<h3>Data berhasil di simpan di database</h3>";
        echo "<a href='index.php'>Kembali ke halaman login</a>";
    }else {
        echo "gagal menyimpan" . mysqli_error($koneksi);
    }

}

?>