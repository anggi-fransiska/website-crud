<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Comment</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
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
</form>
</div>
</body>
</html>