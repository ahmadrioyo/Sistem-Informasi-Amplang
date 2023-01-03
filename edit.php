<?php
session_start();
require('koneksi.php');
if( isset($_POST['submit']) ){
    $id_pesanan = $_POST['id_pesanan']; 
    $sesID = $_POST['id_admin']; 
    $nama = $_POST['nama_pembeli']; 
    $no_hp = $_POST['no_hp_pembeli']; 
    $jml = $_POST['jumlah']; 
    $ttl = $_POST['grand_total'];
    $st = $_POST['status']; 
    $query = "UPDATE pesanan SET 
    id_admin ='$sesID', nama_pembeli ='$nama', no_hp_pembeli ='$no_hp', jumlah =$jml ,grand_total =$ttl , status_bayar ='$st' WHERE id_pesanan ='$id_pesanan'";
    $result = mysqli_query($koneksi, $query);
    header('Location: dash-pesanan.php');
    }
$id_pesanan = $_GET['id_pesanan'];  
$query = "SELECT * FROM pesanan WHERE id_pesanan='$id_pesanan'";
$result = mysqli_query($koneksi, $query)or die(mysqli_errno($koneksi));
while ($row = mysqli_fetch_array($result)) {
    $id_pesanan = $row['id_pesanan']; 
    $sesID = $row['id_admin']; 
    $nama = $row['nama_pembeli']; 
    $no_hp = $row['no_hp_pembeli']; 
    $jml = $row['jumlah']; 
    $ttl = $row['grand_total'];
    $st = $row['status_bayar']; 
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
                    <i class="uil uil-shopping-bag"></i>
                    <span class="text" >Pesanan/ Konfirmasi</span>
                </div>
                <form action="edit.php" method="POST" name="autoSumForm" >
                    <div>
                        <p><input type="hidden" name="id_pesanan"  value="<?php echo $id_pesanan; ?>" readonly ></p>
                    </div>
                    <div>
                        <label for="id_admin"><h3>ID Admin :</h3></label>
                        <input type="text" name="id_admin" value="<?php echo $sesID; ?>" readonly>
                    </div>
                    <div>
                        <label for="nama_pembeli"><h3>Nama Pembeli :</h3></label>
                        <input type="text" name="nama_pembeli" value="<?php echo $nama; ?>" >
                    </div>
                    <div>
                        <label for="no_hp_pembeli"><h3>No Handphone Pembeli :</h3></label>
                        <input type="text" name="no_hp_pembeli" value="<?php echo $no_hp; ?>" >
                    </div>
                    <div>
                        <label for="jumlah"><h3>Jumlah Barang :</h3></label>
                        <input type="text" name="jumlah" value="<?php echo $jml; ?>" onFocus="startCalc();" onBlur="stopCalc();">
                    </div>
                    <div>
                        <label for="grand_total"><h3>Total Harga</h3></label>
                        <input type="text" name="grand_total" value="<?php echo $ttl; ?>"  readonly>
                    </div>
                    <div>
                        <label for="status"><h3>Status</h3></label>
                        <select name="status" id="status" style="width: 100%; height: 40px" >
                            <option value=""><?php echo $st; ?></option>
                            <option value="Belum Lunas">Belum Lunas</option>
                            <option value="Lunas">Lunas</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-animasi btn-color" name="submit">Konfirmasi <i class="uil uil-check"></i></button>
                </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script>
    function startCalc(){
        interval = setInterval("calc()",1);}
        function calc(){
            one = document.autoSumForm.jumlah.value;
            document.autoSumForm.grand_total.value = (one * 1) * (80000 * 1);}
            function stopCalc(){
                clearInterval(interval);}
    </script>
</body>
</html>
<?php } ?>