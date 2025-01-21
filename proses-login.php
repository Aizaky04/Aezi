<?php
require "ind/conn.php";

session_start();

if (isset($_SESSION['email'])) {
    header("Location: info-log.php");
    exit;
}

$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

$sql = "SELECT * FROM murid WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, "s", $inputEmail);
    mysqli_stmt_execute($stmt);
    $queryMurid = mysqli_stmt_get_result($stmt);
    $dataMurid = mysqli_fetch_assoc($queryMurid);

    if ($dataMurid && password_verify($inputPassword, $dataMurid['password'])) {
        // Set session
        $_SESSION['email'] = $dataMurid['email'];
        $_SESSION['nama'] = $dataMurid['nama'];
        $_SESSION['kelas'] = $dataMurid['kelas'];
        header("Location: info-log.php");
        exit;
    } else {
        $_SESSION["message"] = 'Email/password tidak valid.';
        header("Location: login.php");
        exit;
    }
} else {
    $_SESSION["message"] = 'Database error';
    header("Location: login.php");
    exit;
}
?>
