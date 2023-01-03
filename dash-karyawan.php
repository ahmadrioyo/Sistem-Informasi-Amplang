<?php
require("koneksi.php");
session_start();

if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                    <i class="uil uil-constructor"></i>
                    <span class="text">Karyawan</span>
                </div>
                <table class="content-table">
                    <thead>
                    <tr>
                        <td><p>No. </p></td>
                        <td><p>ID Karyawan</p></td>
                        <td><p>Nama Karyawan</p></td>
                        <td><p>Alamat Karyawan</p></td>
                        <td><p>Nomer Handphone Karyawan</p></td>
                        <td><p>Edit</p></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM karyawan";
                        $result = mysqli_query($koneksi, $query);
                        $no = 1;
                        while($row = mysqli_fetch_array($result)){
                            $id_karyawan = $row['id_karyawan']; 
                            $nama = $row['nama_karyawan']; 
                            $alamat = $row['alamat_karyawan']; 
                            $no_hp = $row['no_hp_karyawan']; 
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $id_karyawan; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><?php echo $no_hp; ?></td>
                        <td>
                        <a class="btn btn-animasi btn-color" href="editkaryawan.php?id_karyawan=<?php echo $row['id_karyawan'] ?>"><i class="uil uil-cog"></i><br></a>
                            <br>
                        <a class="btn btn-animasi btn-color" href="hapuskaryawan.php?id_karyawan=<?php echo $row['id_karyawan']?>"><i class="uil uil-trash-alt"></i></i></a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                    </tbody>
                </table>
                <a class="btn btn-animasi btn-color" href="tambahkaryawan.php">Tambahkan Karyawan <i class="uil uil-plus-circle"></i></a>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>