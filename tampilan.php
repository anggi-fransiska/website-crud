<?php 
include("koneksi.php");
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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
            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </div>
    
    </div>
</body>
</html>