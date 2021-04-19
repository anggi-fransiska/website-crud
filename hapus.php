<?php 

include("koneksi.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql= "DELETE FROM comment WHERE id=$id";
    $query=mysqli_query($db, $sql);

    if($query){
        header('Location: tampilan.php');
        echo "<script> alert ('data berhasil dihapus'); </script>";
    }else{
        die("data tidak ada");
    }
}else{
    ("akses ditolak");
}

?>