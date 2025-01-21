<?php
session_start();
require_once('conn.php');

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    $_SESSION["message"] = "Anda harus login terlebih dahulu.";
    header("Location: login.php");
    exit;
}

// Ambil data pengguna yang sedang login berdasarkan email
$email = $_SESSION['email'];
$query_sql = "SELECT * FROM murid WHERE email = ?";
$stmt = mysqli_prepare($conn, $query_sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $sql_result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($sql_result);
} else {
    die("Query gagal: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .avatar-container {
            margin-top: -60px;
        }
    </style>
</head>
<body style="height: 100vh; background-color: #ADD8E6;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <!-- Avatar -->
                        <div class="avatar-container">
                            <img src="img/2.jpg" alt="Avatar" class="avatar mx-auto d-block">
                        </div>
                        <!-- Title -->
                        <h5 class="card-title mt-3">Data Siswa</h5>
                    </div>
                    <!-- Data Siswa -->
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <th scope="row" style="width: 30%;">NISN</th>
                                <td><?php echo $data['nisn']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama</th>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Usia</th>
                                <td><?php echo $data['usia']; ?> Tahun</td>
                            </tr>
                            <tr>
                                <th scope="row">Kelas</th>
                                <td><?php echo $data['kelas']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo $data['email']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Log</th>
                                <td>Aktif</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Buttons -->
                    <div class="card-body d-flex justify-content-between">
                    <div class="d-flex">
                        <a href="edit-avatar.php?id=<?php echo $data['email']; ?>" class="btn btn-primary me-2">Edit</a>
                        <a href="hapus-avatar.php?id=<?php echo $data['email']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus akun?')">Hapus Account</a>
                    </div>
                    <a href="../logout.php" class="btn btn-warning">Logout</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></script>
</body>
</html>
