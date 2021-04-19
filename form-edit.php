<?php
include("koneksi.php");

if ( !isset($_GET['id'])){
  header('Location: tampilan.php');
}

$id = $_GET['id'];

$sql= "SELECT * FROM comment WHERE id=$id";
$query= mysqli_query($db, $sql);
$komen= mysqli_fetch_assoc($query);


if(mysqli_num_rows($query) < 1){
    die("Data Tidak ada");
}


?>
<html>
<body>
<head>
<title>Podcast</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-edit.php" class="row g-3">

<input type="hidden" name="id" value="<?php echo $komen['id'] ?>"/>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" name="nama"class="form-control" id="inputEmail4" value="<?php echo $komen['nama'] ?>"/>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4" value="<?php echo $komen['email'] ?>"/>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Pesan</label>
    <input type="text" name="pesan" class="form-control" id="inputAddress" value="<?php echo $komen['pesan'] ?>" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Kesan</label>
    <input type="text" name="kesan"class="form-control" id="inputEmail4" value="<?php echo $komen['kesan'] ?>"/>
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
    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
  </div>
</form>
</div>

</body>
</html>
