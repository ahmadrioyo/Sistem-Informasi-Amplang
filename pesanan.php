<?php
require('koneksi.php');
if(isset($_POST['pesan'])){
    $id = $_POST['id'];
    $userName = $_POST['nama'];
    $userNo = $_POST['no'];
    $jml = $_POST['jumlah'];
    $total = $_POST['total'];

    $query = "INSERT INTO `pesanan` VALUES ('$id', NULL, '$userName', '$userNo', '$jml', '$total', 'Belum Lunas')";
    $result = mysqli_query($koneksi, $query);
    header('Location: index.php');
}
?>