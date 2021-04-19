<?php 
include('koneksi.php');
?>


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
          <a class="nav-link " aria-current="page" href="admin.php">Dashboard</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " aria-current="page" href="">Home</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" href="admin2.php">Daftar Komentar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Halaman Utama</a>
        </li>
    </div>
  </div>
</nav>
  
<div class="container">
      <h3>
        <i class="fas fa-tachometer-alt m-3">Jumlah Komentar</i>
      </h3><hr>
    <center>Comment</center>
    <div class="row justify-content-center mt-5">
    <nav>
    <a href="form.php">Tambah Comment Baru [ + ]</a>
    </nav>
    <br>

    <div class="table-responsive">
        <table id="table-datables" class="table" border="1">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Kesan</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql= "SELECT * FROM comment";
            $query= mysqli_query($db, $sql);
            $no=1;

            while($komen= mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$no++. "</td>";
                echo "<td>".$komen['nama']."</td>";
                echo "<td>".$komen['email']."</td>";
                echo "<td>".$komen['pesan']."</td>";
                echo "<td>".$komen['kesan']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$komen['id']."'>edit</a> | ";
                echo "<a href='hapus.php?id=".$komen['id']."'>hapus</a> | ";
                echo "</td>";
                echo "</tr>";

            }
            ?>

            </tbody>
        </table>
</div>

</body>
</html>
