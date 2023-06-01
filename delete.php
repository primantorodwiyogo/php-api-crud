<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = ($data['id']);

include 'koneksi.php';
$sql = "DELETE FROM todo WHERE id = '$id'";

if (mysqli_query($koneksi, $sql)) {
  echo json_encode(['msg' => 'Data Berhasil di Hapus!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Gagal di Hapus!', 'status' => false]);
}

?>