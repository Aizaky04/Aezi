<?php
require "ind/conn.php";

session_start();

// Cek jika user sudah login
if (isset($_SESSION['email'])) {
    header("Location: info-log.php");
    exit;
}

// Ambil data dari form
$inputNisn = $_POST["nisn"];
$inputNama = $_POST["nama"];
$inputUsia = $_POST["usia"];
$inputKelas = $_POST["kelas"];
$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

// Validasi apakah email sudah terdaftar
$sql = "SELECT * FROM murid WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $inputEmail);
    mysqli_stmt_execute($stmt);
    $resultCheck = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultCheck) > 0) {
        $_SESSION["message"] = "Email sudah terdaftar, silakan gunakan email lain.";
        header("Location: register.php");
        exit;
    }
} else {
    $_SESSION["message"] = "Database error saat memvalidasi email.";
    header("Location: register.php");
    exit;
}

if (empty($inputPassword)) {
    $_SESSION["message"] = "Password tidak boleh kosong.";
    header("Location: register.php");
    exit;
}

$passwordHashed = password_hash($inputPassword, PASSWORD_BCRYPT);

// Masukkan data ke database
$sqlInsert = "INSERT INTO murid (nisn, nama, usia, kelas, email, password) VALUES (?, ?, ?, ?, ?, ?)";
$stmtInsert = mysqli_prepare($conn, $sqlInsert);

if ($stmtInsert) {
    mysqli_stmt_bind_param($stmtInsert, "isssss", $inputNisn, $inputNama, $inputUsia, $inputKelas, $inputEmail, $passwordHashed);
    if (mysqli_stmt_execute($stmtInsert)) {
        $_SESSION["message"] = "Registrasi berhasil, silakan login.";
        header("Location: login.php");
        exit;
    } else {
        $_SESSION["message"] = "Gagal menyimpan data, silakan coba lagi.";
        header("Location: register.php");
        exit;
    }
} else {
    $_SESSION["message"] = "Database error saat menyimpan data.";
    header("Location: register.php");
    exit;
}

// Tutup statement
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmtInsert);

// Tutup koneksi
mysqli_close($conn);
?>
