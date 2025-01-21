
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEZI-LEARNING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
          h1 {
          font-family: "Outfit", serif;
          font-optical-sizing: auto;
          font-weight: <weight>;
          font-style: normal;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-weight: bold;
            font-size: 1.5rem;
            color: #007BFF;
        }

        .card-body {
            text-align: center;
        }
    </style>
</head>
<body style="height: 100vh; background-color: #ADD8E6;">
    <div class="container py-5">
        <h1 class="text-center mb-5">Pilih Mata Pelajaran</h1>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">B. Indonesia</h5>
                        <p class="card-text">Pelajari tata bahasa dan keterampilan berbahasa Indonesia.</p>
                        <a href="ind/index.php?materi=b.indo" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Matematika</h5>
                        <p class="card-text">Eksplorasi angka, rumus, dan logika matematika.</p>
                        <a href="mtk/index1.php?materi=matematika" class="btn btn-danger">Pilih</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">B. Inggris</h5>
                        <p class="card-text">Kuasai keterampilan membaca, menulis, dan berbicara dalam Bahasa Inggris.</p>
                        <a href="ing/index2.php?materi=binggris" class="btn btn-warning">Pilih</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
