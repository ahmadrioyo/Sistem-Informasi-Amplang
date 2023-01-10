<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT max(id_pesanan) as kodeTerbesar FROM pesanan");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 8, 8);
$urutan++;
$huruf = "PSN";
$kodeBarang = $huruf . sprintf("%08s", $urutan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. RAR Crackers - Home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <img src="icon/batik mega mendung4.jpg" class="melengkung" width="100px" alt="logo">
        <div class="nav-menu">
            <a href="#about">Tentang</a>
            <a href="#service">Pelayanan</a>
            <a href="#visi">Visi</a>
            <a href="#saran">Saran</a>
            <a href="#alamat">Alamat</a>
        </div>
    </nav>
    <section class="hero-container">
        <div>
            <div>
                <h1>UD. RAR Crackers</h1>
                <p>Pemesanan Lebih Mudah, efisien, dan efektif <br>
                 dengan menggunakan Website ini.</p>
                <a href="#pesan" class="btn btn-animasi btn-color" class="modalDialog">Pesan</a>
                <div id="pesan" class="modalDialog">
                    <div>
                        <a href="#" title="Close" class="close">X</a>
                        <p>Silahkan masukkan pesanan anda!</p>
                        <form name="autoSumForm" action="pesanan.php" method="POST">
                            <input type="hidden" value="<?php echo $kodeBarang ?>" readonly name="id" required>
                            <input type="text" placeholder="Nama" name="nama" required>
                            <input type="text" placeholder="No. Handphone" name="no" required>
                            <input type="text" placeholder="Jumlah / kg" name="jumlah" onFocus="startCalc();" onBlur="stopCalc();" required>
                            <p>Rp. <input type="text" name="total" value="0" readonly required></p>
                            <button type="submit" name="pesan">Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="icon/pemesanan.png" alt="">
    </section>
    <section id="about" class="about-container">
        <img src="icon/about us.svg" alt="">
        <div>
            <h1> Tentang Kami.</h1>
            <p> 
                UD. RAR Crackers didirikan pada tahun 2009, perusahaan ini berkecimpung dibidang makanan ringan dengan memproduksi kerupuk amplang.
            </p>
            <p>
                Perusahaan ini berdiri dengan inisiatif seorang ibu yang ingin memperbaiki keuangan keluarganya.
            </p>  
            <p> 
                UD. RAR Crackers memiliki banyak mitra kerja diantaranya Bahagia Bakery, Batavia Holland, dan Nelayan Sekitar.
            </p>
        </div>
    </section>
    <section id="service" class="service-container">
        <div class="caption">
            <h1>Pelayanan kami.</h1>
            <p>Kami menyediakan pelayanan online maupun offline</p>
        </div>
        <div class="card">
            <div class="circle">
                <center><img src="icon/friendly.png" alt=""></center>
                <p>Karyawan Ramah</p>
            </div>
            <div class="circle i">
                <center><img src="icon/fast.png" alt=""></center>
                <p>Pelayanan Cepat</p>
            </div>
            <div class="circle">
                <center><img src="icon/box.png" alt=""></center>
                <p>Kemasan Higenis</p>
            </div>
            <div class="circle i">
                <center><img src="icon/secure.png" alt=""></center>
                <p>100% aman</p>
            </div>
        </div>       
    </section>
    <section id="visi" class="visi-container">
        <div class="visi-judul">
            <img src="icon/visi.png" width="120px" alt="">
            <h1>Visi Kami.</h1>
        </div>
        <div class="visi-item">
            <div class="visi1">
                <img src="icon/nelayan.svg" alt="">
                <p>Membantu UMKM (usaha mikro kecil menengah) dan Nelayan di sekitar daerah Kabupaten Pamekasan. </p>
            </div>
            <div class="visi2">
                <img src="icon/leader.svg" alt="">
                <p>Menjadikan UD. RAR Crackers perusahaan cemilan amplang nomor 1 (satu) di jawa timur.</p>
            </div>
        </div>
    </section>
    <!-- raihan abiyyu -->
    <section id="saran" class="saran-container">
        <div class="saran-value">
            <h1>Hubungi Kami</h1>
            <form action="hubkami.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Nama Lengkap" name="nama" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Alamat Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="phone" placeholder="Nomor Telepon" name="no" required>
                </div>
                <div class="form-group">
                    <textarea name="pesan" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <div class="button-saran">
                    <button class="btn btn-animasi btn-color" type="submit" name="kirim">Kirim</button>
                </div>
            </form>
        </div>
        <div class="img">
            <img src="icon/batik mega mendung3.png" alt="">  
        </div>
    </section>
    <!-- adi hariyanto -->
    <section id="alamat" class="down-container">  
        <div>
            <div class="down-container-value">
                <img src="icon/map.png" alt="">
                <p>Alamat : <br> Jl. Lawangan Daya II, Kecamatan Pademawu,Kabupaten Pamekasan.</p>
            </div>
            <div class="down-container-value">
                <img src="icon/telepon.png" alt="">
                <p>No. Hp : <br> +(62)852-3085-7042</p>
            </div>
            <div class="down-container-value">
                <img src="icon/gmail.svg" alr="">
                <p>Email : <br> ahmadrio919@gamail.com</p>
            </div>
        </div>
        <img src="icon/mapw.png" alt="">
    </section>
    <footer class="footer-index">    
        <p>UD. RAR Crackers. since 2009</p>
    </footer>
    <script>
    function startCalc(){
        interval = setInterval("calc()",1);}
        function calc(){
            one = document.autoSumForm.jumlah.value;
            document.autoSumForm.total.value = (one * 1) * (80000 * 1);}
            function stopCalc(){
                clearInterval(interval);}
    </script>
</body>
</html>