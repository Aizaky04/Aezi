<?php
require_once('conn.php');

$nisn = $_GET['nisn'];

// Gunakan prepared statement untuk menghindari SQL injection
$query_sql = "DELETE FROM murid WHERE nisn = ?";
$stmt = mysqli_prepare($conn, $query_sql);
mysqli_stmt_bind_param($stmt, "s", $nisn);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "<script> alert('Akun berhasil dihapus.')</script>";
    echo "<script>window.location.href='logout.php'</script>";
} else {
    echo "<script> alert('Akun gagal dihapus.')</script>";
}
?>
