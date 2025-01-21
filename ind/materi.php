<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AEZI-LEARNING - Materi</title>
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
    .materi-card {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease;
    }
    .materi-card:hover {
      transform: translateY(-5px);
    }
    .materi-title {
      font-size: 1.5rem;
      color: #007BFF;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .materi-content {
      font-size: 1rem;
      color: #555;
    }
    .btn-learn {
      margin-top: 20px;
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
  <?php require_once('menu3.php'); ?>
  <div class="container content-section">
    <div class="content-header">
      Materi - Bahasa Indonesia
    </div>
    <div class="materi-card">
      <div class="materi-title">Menentukan Ide Pokok dan Kesimpulan Paragraf</div>
      <div class="materi-content">
      Ide pokok adalah inti atau gagasan utama dari sebuah paragraf. 
      Ide ini biasanya dinyatakan dalam kalimat utama, yang dapat terletak
      di awal, akhir, atau campuran antara awal dan akhir paragraf. Kalimat 
      utama mewakili keseluruhan isi paragraf, sedangkan kalimat penjelas mendukung 
      dan menjelaskan lebih detail kalimat utama. Untuk menemukan ide pokok, baca seluruh
       paragraf dengan saksama, temukan kalimat utama, lalu sederhanakan inti kalimat tersebut menjadi ide pokok.

       Kesimpulan adalah pernyataan singkat yang merangkum isi utama paragraf atau bacaan secara keseluruhan.
       Untuk membuat kesimpulan, pahami dulu ide pokok tiap paragraf dalam teks. Kesimpulan sering digunakan untuk 
       menyoroti gagasan penting dalam bentuk yang lebih sederhana. Contohnya, jika paragraf membahas "jagung sebagai
        makanan pokok di Indonesia," maka kesimpulannya bisa menjadi "Jagung adalah sumber makanan penting bagi masyarakat
         Indonesia." Dengan memahami ide pokok, menyusun kesimpulan menjadi lebih mudah.
        </div>
      <a href="https://www.youtube.com/watch?v=-iC8fwIbi58" class="btn btn-learn">Pelajari Lebih Lanjut</a>
    </div>
      </div>
    </div>
</body>
</html>
