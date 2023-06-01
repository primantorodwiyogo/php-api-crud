<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = ($data['id']);
$title = ($data['title']);
$deskripsi = ($data['deskripsi']);

include 'koneksi.php';

$sql = "UPDATE todo SET title = '$title', deskripsi = '$deskripsi' WHERE id = '$id'";

if (mysqli_query($koneksi, $sql)) {
  echo json_encode(['msg' => 'Data Berhasil di Upadate!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Gagal di Upadate!', 'status' => false]);
}

?>