<?php
require "../config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 #code...

 $nama = $_POST['nama'];
 $kategoriid =$_POST['kategoriid'];
 

 
 $insert = "UPDATE kategori SET nama='$nama' WHERE id='$kategoriid'";

 if (mysqli_query($con, $insert)) {
  # code...
  $response['value'] = 1;
  $response['message'] = "kategori berhasil diedit";
  echo json_encode($response);
 } else {
  # code...
  $response['value'] = 0;
  $response['message'] = "kategori gagal diedit";
  echo json_encode($response);
 }
}
