<?php
include('koneksi.php');
if(isset($_GET['id_produk'])) 
{
    $query = mysqli_query($koneksi,"select * from produk where id_produk='".$_GET['id_produk']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:index.php');
}
?>