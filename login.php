<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&display=swap" rel="stylesheet">
  <style>
    h1 {
      font-family: 'Edu AU VIC WA NT Arrows', cursive;
      font-weight: 700; 
      color: #333; 
      text-align: center; 
    }
  </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background-color: #ADD8E6;">

  <form action="proses-login.php" method="post" class="w-100" style="max-width: 450px;">
    <h1>Aplikasi 
    AEZI-LEARNING</h1>
    <div class="card">
      <div class="card-header">
        LOGIN
      </div>
      <div class="card-body">
        
        <?php
        session_start();
        if (isset($_SESSION["message"])) {
          echo '<div class="alert alert-danger">' . $_SESSION["message"] . '</div>';
          unset($_SESSION["message"]);
        }
        ?>
        
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
      </div>
      <div class="card-footer text-body-secondary">
        <button type="submit" class="btn btn-outline-info">Login</button>
        <a href="register.php" class="btn btn-outline-info">Register</a>
      </div>
    </div>
  </form>
</body>
</html>
