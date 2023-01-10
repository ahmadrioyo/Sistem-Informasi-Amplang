<?php
require('koneksi.php');
if(isset($_POST['kirim'])){
    $id = $_POST['nama'];
    $userName = $_POST['email'];
    $userNo = $_POST['no'];
    $jml = $_POST['pesan'];

    $query = "INSERT INTO `hubungi_kami` VALUES ('', '$id', '$userName', '$userNo', '$jml')";

    echo "<script>alert('Pemesan anda telah disimpan, untuk pembayaran harap konfirmasi kepada admin!')</script>";
    $result = mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>