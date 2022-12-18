<<<<<<< HEAD:index.php
<?php
require('koneksi.php');
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <img src="icon/batik mega mendung4.jpg" class="melengkung" width="100px" alt="logo">
        <div class="nav-menu">
            <a href="#about">Tentang</a>
            <a>Pelayanan</a>
            <a>Visi</a>
            <a>Saran</a>
            <a>Alamat</a>
            <a href="login.php" >Masuk</a>
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
                        <form  action="action_page.php">
                        <input type="text" placeholder="Nama" name="uname" required>
                        <input type="text" placeholder="No. Handphone" name="uname" required>
                        <input type="text" placeholder="Alamat" name="uname" required>
                        <input type="text" placeholder="Jumlah" name="uname" required>
                        <input type="text" placeholder="Bayar (bisa di dp atau di bayar ketika pesanan selesai)" name="uname" required>
                        <button type="submit">Bayar</button>
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
    <section class="service-container">
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
    <section>        
    </section>
    <!-- raihan abiyyu -->
    <section class="saran-container">
        <div>
            <h1>Hubungi Kami</h1>
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Alamat Email">
                </div>
                <div class="form-group">
                    <input type="phone" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <textarea rows="4" placeholder="Pesan"></textarea>
                </div>
                <div class="button-countainer">
                    <button>Kirim</button>
                </div>
            </form>
        </div>
        <div class="img">
            <img src="icon/batik mega mendung3.png" alt="">  
        </div>
    </section>
    <!-- adi hariyanto -->
    <section class="down-container">  
        <div>
            <img src="icon/map.png" style="float:left;" alt="">
            <p>Alamat : Jl. Lawangan Daya II, Kecamatan Pademawu,Kabupaten Pamekasan.</p>
            <br>
            <img src="icon/telepon.png" style="float:left;" alt="">
            <p>No. Hp : +(62)852-3085-7042</p>
            <br>
            <img src="icon/gmail.svg"style="float:left;" alr="">
            <p>Email : ahmadrio919@gamail.com</p>
            <br>
        </div>
        <img src="icon/mapw.png" alt="">
    </section>
    <footer class="footer-index">    
        <p>UD. RAR Crackers. since 2009</p>
    </footer>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD. RAR Crackers - Home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <img src="icon/batik mega mendung4.jpg" class="melengkung" width="100px" alt="logo">
        <div class="nav-menu">
            <a href="#about">Tentang</a>
            <a>Pelayanan</a>
            <a>Visi</a>
            <a>Saran</a>
            <a>Alamat</a>
            <a href="login.html" class="btn btn-animasi btn- color">Login.</a>
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
                        <form  action="action_page.php">
                        <input type="text" placeholder="Nama" name="uname" required>
                        <input type="text" placeholder="No. Handphone" name="uname" required>
                        <input type="text" placeholder="Alamat" name="uname" required>
                        <input type="text" placeholder="Jumlah" name="uname" required>
                        <input type="text" placeholder="Bayar (bisa di dp atau di bayar ketika pesanan selesai)" name="uname" required>
                        <button type="submit">Bayar</button>
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
    <section class="service-container">
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
    <section>        
    </section>
    <!-- raihan abiyyu -->
    <section class="saran-container">
        <div>
            <h1>Hubungi Kami</h1>
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Alamat Email">
                </div>
                <div class="form-group">
                    <input type="phone" placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <textarea rows="4" placeholder="Pesan"></textarea>
                </div>
                <div class="button-countainer">
                    <button>Kirim</button>
                </div>
            </form>
        </div>
        <div class="img">
            <img src="icon/batik mega mendung3.png" alt="">  
        </div>
    </section>
    <!-- adi hariyanto -->
    <section class="down-container">  
        <div>
            <img src="icon/map.png" style="float:left;" alt="">
            <p>Alamat : Jl. Lawangan Daya II, Kecamatan Pademawu,Kabupaten Pamekasan.</p>
            <br>
            <img src="icon/telepon.png" style="float:left;" alt="">
            <p>No. Hp : +(62)852-3085-7042</p>
            <br>
            <img src="icon/gmail.svg"style="float:left;" alr="">
            <p>Email : ahmadrio919@gamail.com</p>
            <br>
        </div>
        <img src="icon/mapw.png" alt="">
    </section>
    <footer class="footer-index">
          <p align="center">UD. RAR Crackers. since 2009</p>
        </footer>
</body>
>>>>>>> 0e5269d845e43394c48ae2ed8dddd2badd70455f:index.html
</html>