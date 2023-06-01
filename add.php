

<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Access-Control-Allow-Headers, Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"), true);

$title = ($data['title']);
$deskripsi = ($data['deskripsi']);

include 'koneksi.php';

$sql = "INSERT INTO todo (title, deskripsi) VALUES ('$title', '$deskripsi')";

if (mysqli_query($koneksi, $sql)) {
    echo json_encode(['msg' => 'Data Berhasil di Tersimpan!', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Data Gagal di Tersimpan!', 'status' => false]);
}
?>