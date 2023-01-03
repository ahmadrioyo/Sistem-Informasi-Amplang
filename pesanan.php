<?php
require('koneksi.php');
if(isset($_POST['pesan'])){
    $id = $_POST['id'];
    $userName = $_POST['nama'];
    $userNo = $_POST['no'];
    $jml = $_POST['jumlah'];
    $total = $_POST['total'];

    $query = "INSERT INTO `pesanan` VALUES ('$id', NULL, '$userName', '$userNo', '$jml', '$total', 'Belum Lunas',current_timestamp())";

    echo "<script>alert('Pemesan anda telah disimpan, untuk pembayaran harap konfirmasi kepada admin!')</script>";
    $result = mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>