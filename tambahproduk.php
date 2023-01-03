<?php
require("koneksi.php");
session_start();
$sesID = $_SESSION['id_admin'];
$sesName = $_SESSION['fullname'];
if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
}
$query = mysqli_query($koneksi, "SELECT max(id_karyawan) as kodeTerbesar FROM karyawan");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 8, 8);
$urutan++;
$huruf = "PAO";
$kodeBarang = $huruf . sprintf("%08s", $urutan);
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $sesID = $_POST['ida'];
    $userName = $_POST['nama'];
    $amt = $_POST['alamat'];

    $query = "INSERT INTO `produk` VALUES ('$id','$sesID','$userName', '$amt', current_timestamp(), current_timestamp())";
    $result = mysqli_query($koneksi, $query);
    header('Location: dash-stok.php');
}
$sesID = $_SESSION['id_admin'];
$sesName = $_SESSION['fullname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. RAR Crackers - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&display=swap" rel="stylesheet">
</head>
<body class="dashboard">
    <nav class="nav">
        <div class="logo-name">
            <div class="logo-image">
                <img src="icon/batik mega mendung3.png" alt="">
            </div>
            <span class="logo_name">UD. RAR Crackers</span>
        </div>
        <div class="menu-items">
            <ul class="nav-link">
                <li><a href="dashboard.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Beranda</span>
                </a></li>
                <li><a href="dash-pesanan.php">
                    <i class="uil uil-shopping-bag"></i>
                    <span class="link-name">Pesanan</span>
                </a></li>
                <li><a href="dash-stok.php">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Stok Produk</span>
                </a></li>
                <li><a href="dash-karyawan.php">
                    <i class="uil uil-constructor"></i>
                    <span class="link-name">Karyawan</span>
                </a></li>
                <li><a href="dash-laporan.php">
                    <i class="uil uil-file-bookmark-alt"></i>
                    <span class="link-name">Laporan</span>
                </a></li>
            </ul>
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name"> Log out</span>
                </a></li>
                <li class="mode"><a href="">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard-body">
        <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
            <div>
                <center><h3>Selamat Datang</h3><p><?php echo $sesName; ?></p></center>
            </div>
            <img src="icon/user.svg" alt="">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-box"></i>
                    <span class="text">Daftar Produk / Tambah Produk</span>
                </div>
                <form action="tambahproduk.php" method="POST">
                    <input type="hidden" value="<?php echo $kodeBarang ?>" name="id" required>
                    <input type="hidden" value="<?php echo $sesID ?>" name="ida" id=""></h3>
                    <h3>Nama Produk : <input type="text" name="nama" required></h3>
                    <h3>Harga Produk : <input type="text" name="alamat" required></h3>
                    <button class="btn btn-animasi btn-color" type="submit" name="submit">Tambah Produk  <i class="uil uil-plus-circle"></i></button>
                </form>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>