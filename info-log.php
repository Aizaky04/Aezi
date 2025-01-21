<?php 
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>
  alert('Kamu belum login');
  window.location.replace('login.php');
  </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Log</title>
</head>
<body>
    <?php require_once('pilih-materi.php'); ?>
</body>
</html>
