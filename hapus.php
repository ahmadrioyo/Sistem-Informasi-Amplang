<?php
require ('koneksi.php');
$id_pesanan = $_GET['id_pesanan'];
mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan ='$id_pesanan'")or die(mysqli_errno($koneksi));

header("Location:dash-pesanan.php");
?>