<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #ADD8E6;
    }
    h1 {
      font-family: 'Edu AU VIC WA NT Arrows', cursive;
      text-align: center;
      color: #333; 
      margin-bottom: 20px;
      font-size: 2rem;
    }
    .form-container {
      max-width: 450px;
      padding: 20px;
    }
    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    @media (max-width: 576px) {
      h1 {
        font-size: 1.5rem;
        margin-bottom: 15px;
      }
      .form-container {
        padding: 15px;
      }
    }
  </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">

  <div class="container">
    <h1>Aplikasi AEZI-LEARNING</h1>
    <div class="card mx-auto form-container">
      <div class="card-header text-center">
        REGISTER
      </div>
      <form action="proses-register.php" method="post">
        <div class="card-body">
          <!-- NISN -->
          <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <label for="password" class="form-label">:</label>
            <input type="number" class="form-control form-control-sm" name="nisn" id="nisn" placeholder="Masukkan NISN" required>
          </div>
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <label for="password" class="form-label">:</label>
            <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <!-- Usia -->
          <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <label for="password" class="form-label">:</label>
            <input type="number" class="form-control form-control-sm" name="usia" id="usia" placeholder="Masukkan Usia" required>
          </div>
          <!-- Kelas -->
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <label for="password" class="form-label">:</label>
            <input type="text" class="form-control form-control-sm" name="kelas" id="kelas" placeholder="Masukkan Kelas (misal: 6)" required>
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <label for="password" class="form-label">:</label>
            <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Masukkan Email" required>
          </div>
          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <label for="password" class="form-label">:</label>
            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Masukkan Password" required>
          </div>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-outline-info btn-sm">Register</button>
          <a href="login.php" class="btn btn-outline-info btn-sm">Login</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
