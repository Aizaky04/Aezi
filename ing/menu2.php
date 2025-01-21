<style>
    /* Gaya untuk menu navbar */
    .nav-link {
        position: relative;
        padding: 10px 15px;
        transition: box-shadow 0.3s ease, transform 0.3s ease; /* Animasi efek */
    }

    /* Efek bayangan saat hover */
    .nav-link:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
        transform: translateY(-2px); /* Efek sedikit terangkat */
        border-radius: 5px; /* Opsional: Tambahkan sudut melengkung */
    }

    /* Gaya untuk avatar */
    .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .avatar-container {
        margin-top: -10px;
    }
    /* Gaya untuk logo */
    .navbar-logo {
        height: 50px;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
     <!-- Logo Navbar -->
     <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Logo" class="navbar-logo">
    </a>
    <!-- Tombol Toggle untuk Tampilan Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
        <a class="nav-link" href="materi2.php">Materi</a>
        <a class="nav-link" href="penjelasan2.php">Penjelasan</a>
        <a class="nav-link" href="kuising.php">Kuis</a>
        <div class="avatar-container">
          <a href="avatar2.php">
              <img src="img/2.jpg" alt="Avatar" class="avatar mx-auto d-block">
          </a>
      </div>
      </div>
    </div>
  </div>
</nav>
