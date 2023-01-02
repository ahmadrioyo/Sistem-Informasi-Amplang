<?php
require('koneksi.php');
if(isset($_POST['pesan'])){
    $id = $_POST['id'];
    $userName = $_POST['nama'];
    $userNo = $_POST['no'];
    $jml = $_POST['jumlah'];
    $total = $_POST['total'];

    $query = "INSERT INTO `pesanan` VALUES ('$id', NULL, '$userName', '$userNo', '$jml', '$total', 'Belum Lunas',current_timestamp())";
    echo "<script>alert('Data Anda telah tersimpan, harap konfirmasi kepada admin untuk pembayaran!')</script>";
    $result = mysqli_query($koneksi, $query);
    echo "<script>alert('Data Anda telah tersimpan, harap konfirmasi kepada admin untuk pembayaran!')</script>";
    header('Location: index.php');
}
?>