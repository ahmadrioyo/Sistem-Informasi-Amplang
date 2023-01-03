<?php
session_start();
require('koneksi.php');
if( isset($_POST['update']) ){
    $id_karyawan = $_POST['id_karyawan']; 
    $nama = $_POST['nama_karyawan']; 
    $no_hp = $_POST['alamat_karyawan']; 
    $jml = $_POST['no_hp_karyawan'];
    $query = "UPDATE karyawan SET 
    nama_karyawan ='$nama', alamat_karyawan ='$no_hp', no_hp_karyawan ='$jml' WHERE id_karyawan ='$id_karyawan'";
    $result = mysqli_query($koneksi, $query);
    header('Location: dash-karyawan.php');
    }
$id_karyawan = $_GET['id_karyawan'];  
$query = "SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'";
$result = mysqli_query($koneksi, $query)or die(mysqli_errno($koneksi));
while ($row = mysqli_fetch_array($result)) {
    $id_karyawan = $row['id_karyawan']; 
    $nama = $row['nama_karyawan']; 
    $no_hp = $row['alamat_karyawan']; 
    $jml = $row['no_hp_karyawan']; 
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
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Cari...">
            </div>
            <div>
            <h3>Selamat Datang</h3><p><?php echo $sesName; ?></p>
            </div>
            <img src="icon/user.svg" alt="">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-constructor"></i>
                    <span class="text">Karyawan / Edit Data Karyawan</span>
                </div>
                <div>
                    <form action="editkaryawan.php" method="POST">
                        <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>">
                        <h3>Nama Karyawan : <input type="text" name="nama_karyawan" value="<?php echo $nama; ?>"></h3>
                        <h3>Alamat : <input type="text" name="alamat_karyawan" value="<?php echo $no_hp; ?>"></h3>
                        <h3>Nomor Handphone Karyawan : <input type="text" name="no_hp_karyawan" value="<?php echo $jml; ?>"></h3>
                        <button type="submit" class="btn btn-animasi btn-color" name="update">Ubah <i class="uil uil-cog"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
<?php } ?>