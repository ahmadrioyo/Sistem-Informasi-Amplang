<?php
require ('koneksi.php');
$id_produk = $_GET['id_produk'];
mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk ='$id_produk'")or die(mysqli_errno($koneksi));

header("Location:dash-stok.php");
?>