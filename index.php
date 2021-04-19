<?php 
include('koneksi.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Podcast</title>
  </head>
  <body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Podcast</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#about">About</a>
      <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
      <a class="nav-item nav-link" href="admin.php">Admin</a>
    </div>
  </div>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="profile.jpg" width="200" class="rounded-circle" >
    <h1 class="display-4">Podcast</h1>
    <p class="lead">Menyediakan podcast gratis untuk menemani hari hari anda.</p>
    <p class="lead">Dan temukan banyak genre yang mungkin anda sukai.</p>
  </div>
</div>

<section id="about">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1>About</h1>
    </div> 
  </div>

  <div class="row">
    <div class="col">
      <p class="text-justify">Podcast adalah berkas digital berupa audio yang pendengarnya diharuskan untuk mengunduh terlebih dahulu untuk bisa mendengarkan audio tersebut. Podcast ini adalah audio non-streaming, sehingga sangat berbeda dengan radio. Podcast ini telah banyak digunakan oleh masyarakat untuk mendengarkan berita, ilmu pengetahuan, dan sharing ilmu pengetahuan yang bersifat dapat diulang.</p>
    </div>
    <div class="col">
      <p class="text-justify">Daripada Cuma bengong diam tidak melakukan apapun, Anda bisa memilih untuk mendengarkan topik yang menarik. Perkembangan Podcast di Indonesia berpotensi pesat, karena Anda tidak perlu menghabiskan waktu untuk mendengarkan iklan yang tidak menarik. Tidak ada juga selingan lagu dan bisa terus dengarkan topik yang diminati sampai akhir.Ide tema bahasan untuk Podcast biasa disampaikan dalam bentuk episode-episode</p>
    </div>
  </div>
</div>
</section>

 <div id="portfolio" class="container">
   <div class="row">
     <div class="col text-center">
       <h1>Portfolio</h1>
     </div>
   </div>

   <div class="row mb-4">
     <div class="col-md">
       <div class="card" >
      <img class="card-img-top" src="podcast.png" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Dengarkan podcast secara gratis disini.</p>
      </div>
    </div>
     </div>
      <div class="col-md">
       <div class="card" >
      <img class="card-img-top" src="sana.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Dari sana: Rintik Sedu.</p>
      </div>
    </div>
     </div>
      <div class="col-md">
       <div class="card" >
      <img class="card-img-top" src="satu.jpg" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">Rintik Sedu: Kalau dipendam jadi jalan paling aman, ya udah.</p>
      </div>
    </div>
     </div>
  </div> 
</div>
</section>

<!-- Contact -->
<section id="contact" class="contact mb-5">
<div class="container">
  <div class="row pt-4 mb-4">
    <div class="col text-center">
      <h2>Masukan</h2>
    </div>
  </div>

  <div class="row justify-content-center" >
    <div class="col-lg-4">
      <div class="card text-white bg-primary mb-3 text-center">
      <div class="card-body">
        <h5 class="card-title">Masukan</h5>
        <p class="card-text">Selamat nenjalani hari hari menyenangkan anda.</p>
      </div>
    </div>
    <ul class="list-group">
      <li class="list-group-item">Location</li>
      <li class="list-group-item">My Office</li>
      <li class="list-group-item">Jl. Setiabudhi No.193, Bandung</li>
      <li class="list-group-item">West java, Indonesia</li>
    </ul>
    </div>

  <div class="col-lg-6">
    <div class="container">
<form method="POST" action="proses-daftar.php" class="row g-3">
  <div class="col-md-6">
    <label for="text" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Pesan</label>
    <input type="text" name="pesan" class="form-control" id="inputAddress" placeholder="Ketikkan pesan anda disini">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Kesan</label>
    <input type="text" name="kesan" class="form-control" id="inputAddress2" placeholder="Ketikkan kesan anda disini">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
   <div class="col-12">
    <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
  </div>
</section>


<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center">
        <p>Copyright 2021</p>
      </div>
    </div>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>