<?php
require ('koneksi.php');
$id_karyawan = $_GET['id_karyawan'];
mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan ='$id_karyawan'")or die(mysqli_errno($koneksi));

header("Location:dash-karyawan.php");
?>