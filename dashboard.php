<?php
require ("koneksi.php");
session_start();

if(!isset($_SESSION['id_admin'])){
    header('Location: login.php');
}
$sesID = $_SESSION['id_admin'];
$sesName = $_SESSION['fullname'];
$query = "SELECT * FROM pesanan ORDER BY id_pesanan DESC";
$result = mysqli_query($koneksi, $query);
$no = 1;
while($row = mysqli_fetch_array($result)){
$id_pesanan = $row['id_pesanan']; 
$sesID = $row['id_admin']; 
$nama = $row['nama_pembeli']; 
$no_hp = $row['no_hp_pembeli']; 
$jml = $row['jumlah']; 
$ttl = $row['grand_total'];
$st = $row['status_bayar']; 
}   
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
                <li><a href="dashboard.php">
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
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="text">Beranda</span>
                </div>
                <div class="boxes">
                    <div class="box box1">  
                        <i class="uil uil-wallet"></i>
                        <span class="text">Jumlah Pendapatan</span>
                        <span class="number">
                            Rp. <?php
                            $query = "SELECT SUM(grand_total) FROM pesanan WHERE status_bayar='Lunas';";
                            $hasil = mysqli_query($koneksi, $query);
                            while ($row = $hasil->fetch_assoc()) {
                            echo $row['SUM(grand_total)']."<br>";
                            }
                        ?>
                        </span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-shopping-cart-alt"></i>
                        <span class="text">Total Pesanan</span>
                        <span class="number">
                            <?php
                            $query = "SELECT SUM(jumlah) FROM pesanan;";
                            $hasil = mysqli_query($koneksi, $query);
                            while ($row = $hasil->fetch_assoc()) {
                            echo $row['SUM(jumlah)']."<br>";
                            }
                            ?>
                        </span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-usd-circle"></i>
                        <span class="text">Piutang Konsumen</span>
                        <span class="number">
                            Rp. 
                            <?php
                            $query = "SELECT SUM(grand_total) FROM pesanan WHERE status_bayar='Belum Lunas';";
                            $hasil = mysqli_query($koneksi, $query);
                            while ($row = $hasil->fetch_assoc()) {
                            echo $row['SUM(grand_total)']."<br>";
                            }
                        ?>
                        </span>
                    </div>
                    
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Trasaksi terbaru</span>
                </div>
                <div class="activity-data">
                <table class="content-table">
                    <thead>
                    <tr>
                        <td><p>ID Pesanan</p></td>
                        <td><p>ID Admin</p></td>
                        <td><p>Nama</p></td>
                        <td><p>Nomer Handphone</p></td>
                        <td><p>Jumlah</p></td>
                        <td><p>Total Harga</p></td,magic_quotes_runtime>
                        <td><p>Status Pembayaran</p></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM pesanan  ORDER BY id_pesanan DESC";
                        $result = mysqli_query($koneksi, $query);
                        while($row = mysqli_fetch_array($result)){
                            $id_pesanan = $row['id_pesanan']; 
                            $sesID = $row['id_admin']; 
                            $nama = $row['nama_pembeli']; 
                            $no_hp = $row['no_hp_pembeli']; 
                            $jml = $row['jumlah']; 
                            $ttl = $row['grand_total'];
                            $st = $row['status_bayar']; 
                    ?>
                    <tr>
                        <td><?php echo $id_pesanan; ?></td>
                        <td><?php echo $sesID; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $no_hp; ?></td>
                        <td><?php echo $jml; ?></td>
                        <td><?php echo $ttl; ?></td>
                        <td><?php echo $st; ?></td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>