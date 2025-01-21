<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "za-learning";

$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn){
  echo "koneksi gagal: ". mysqli_connect_error();
}
?>
