<?php

header('Content-Type: application/json');
session_start();
$rawJson = file_get_contents("php://input");
$data = json_decode($rawJson, true);

$title = $data['title'];
$id = $data['id'];
$user = $_SESSION['nama'];

$response = [
    "status" => "success",
    "pesan" => "halo $user, film $title (ID: $id), berhasil di simpan"
];

echo json_encode($response);
?>