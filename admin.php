<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Podcast</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="admin2.php">Daftar Komentar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Halaman Utama</a>
        </li>
    </div>
  </div>
</nav>
  
<div class="container">
      <h3>
        <i class="fas fa-tachometer-alt m-3">Dashboard</i>
      </h3><hr>
      <div class="row text-white">
        <div class="card bg-primary m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Jumlah Genre</h5>
          <div class="display-4">4</div>
          <a href=""><p class="card-text text-white">Lihat Selengkapnya</p></a>
        </div>
      </div>
      <div class="card bg-danger m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Top Playlist</h5>
          <div class="display-4">15</div>
          <a href=""><p class="card-text text-white">Lihat Selengkapnya</p></a>
        </div>
      </div>
    <div class="row mt-4">
      <div class="card m-3 text-white text-center"  style="width: 18rem;">
      <div class="card-header bg-danger display-4 m-3 pt-4 pb-4">
          <i class="fab fa-instagram"></i>
      </div>
      <div class="card-body text-danger">
        <h5 class="card-title">INSTAGRAM</h5>
        <a href="#" class="btn btn-danger">Go Follow</a>
      </div>
    </div>
    <div class="card m-3 text-white text-center"  style="width: 18rem;">
      <div class="card-header bg-primary display-4 m-3 pt-4 pb-4">
          <i class="fab fa-facebook"></i>
      </div>
      <div class="card-body text-primary">
        <h5 class="card-title">FACEBOOK</h5>
        <a href="#" class="btn btn-primary">Go Follow</a>
      </div>
    </div>
    <div class="card m-3 text-white text-center"  style="width: 18rem;">
      <div class="card-header bg-success display-4 m-3 pt-4 pb-4">
          <i class="fab fa-line"></i>
      </div>
      <div class="card-body text-success">
        <h5 class="card-title">LINE</h5>
        <a href="#" class="btn btn-success">Go Follow</a>
      </div>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>

</body>
</html>
