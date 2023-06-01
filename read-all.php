<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include 'koneksi.php';

$sql = "SELECT * FROM todo";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo json_encode($data);
} else {
  echo json_encode(['msg' => 'No Data!', 'status' => false]);
}
?>
