<?php

require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 #code...
 $response = array();
 $nama = $_POST['nama'];
 



 $insert = "INSERT INTO kategori VALUE(NULL, '$nama')";

 if (mysqli_query($con, $insert)) {
  # code...
  $response['value'] = 1;
  $response['message'] = "Kategori berhasil ditambahkan";
  echo json_encode($response);
 } else {
  # code...
  $response['value'] = 0;
  $response['message'] = "Kategori gagal ditambahkan";
  echo json_encode($response);
 }
}
