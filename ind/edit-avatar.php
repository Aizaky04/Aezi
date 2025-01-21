<?php 
require_once('conn.php');
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    $_SESSION["message"] = "Anda harus login terlebih dahulu.";
    header("Location: login.php");
    exit;
}

// Proses update data avatar
if (isset($_POST['btnsimpan']) && $_POST['btnsimpan'] == 'btnsimpan') {
    $email = $_SESSION['email'];
    $nama = trim($_POST['nama']);
    $kelas = trim($_POST['kelas']);
    $usia = trim($_POST['usia']);

    $query_sql = "UPDATE murid SET nama='$nama', kelas='$kelas', usia='$usia' WHERE email='$email'";
    $sql = mysqli_query($conn, $query_sql) or die(mysqli_error($conn));
    
    if ($sql) {
        echo "<script>alert('Data berhasil diubah!');</script>";
        echo "<script>window.location.href='avatar.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data. Silakan coba lagi.');</script>";
    }
}

// Ambil data pengguna saat ini
$email = $_SESSION['email'];
$query_sql = "SELECT * FROM murid WHERE email='$email'";
$sql = mysqli_query($conn, $query_sql) or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Avatar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <h5 class="card-title mt-3">Edit Data Siswa</h5>
          </div>
          <!-- Form Edit -->
          <form method="post" class="px-3">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama:</label>
              <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas:</label>
              <input type="text" name="kelas" value="<?php echo htmlspecialchars($data['kelas']); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="usia" class="form-label">Usia:</label>
              <input type="number" name="usia" value="<?php echo htmlspecialchars($data['usia']); ?>" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
              <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit">Simpan</button>
              <a href="avatar.php" class="btn btn-primary">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
