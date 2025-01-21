<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AEZI-LEARNING - Materi Video</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
      padding-bottom: 50px;
    }
    .content-section {
      margin-top: 30px;
      padding: 20px;
    }
    .content-header {
      text-align: center;
      font-size: 2rem;
      font-weight: bold;
      color: #007BFF;
      margin-bottom: 30px;
    }
    .video-card {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }
    .video-card:hover {
      transform: translateY(-5px);
    }
    .video-title {
      font-size: 1.5rem;
      color: #007BFF;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .video-container {
      position: relative;
      padding-top: 56.25%;
      margin-bottom: 15px;
    }
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    .btn-learn {
      margin-top: 10px;
      background-color: #32CD32;
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }
    .btn-learn:hover {
      background-color: #228B22;
    }
  </style>
</head>
<body style="height: 100vh; background-color: #ADD8E6;">
  <?php require_once('menu1.php'); ?>

  <div class="container content-section">
    <div class="content-header">
      Materi Video - Matematika
    </div>

    <!-- Video 1 -->
    <div class="video-card">
      <div class="video-title">Pembagian Bersusun (POROGAPIT)</div>
      <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/AERcrqaymtQ" 
        title="Pengertian Bahasa Indonesia" allowfullscreen></iframe>
      </div>
      <a href="#" class="btn btn-learn">Pelajari Lebih Lanjut</a>
    </div>

</body>
</html>
