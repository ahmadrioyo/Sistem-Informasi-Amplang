<?php
session_start();
require ('koneksi.php');
$sesID = $_SESSION['id_admin'];
$tanggal = date('Y-m-d');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
	<title>UD. RAR Crackers - Unduh Laporan Pendapatan</title>
</head>
<body>
	<p>admin : <?php echo $sesID; ?></p>
	<center><img src="icon/batik mega mendung3.png" class="rounded" width="80px" alt=""></center>
	<br>
	<center>
		<h1>UD. RAR Crackers</h1>
		<h4>Laporan Pendapatan</h4>
	</center>
	<br>
	<table style="width: 100%;" border="1">
		<thead>
			<tr>
				<h3>Tanggal :</h3>
				<p><?php echo $tanggal; ?></p>
			</tr>
			<br>
		<tr>
			<td><p>No. </p></td>
			<td><p>Nama</p></td>
			<td><p>No Handphone Pembeli</p></td>
			<td><p>Tanggal</p></td>
			<td><p>Jumlah</p></td>
			<td><p>Harga Produk</p></td>
			<td><p>Total Harga</p></td>
		</tr>
		</thead>
		<tbody>
		<?php
			$query = "SELECT * FROM pesanan;";			
			$result = mysqli_query($koneksi, $query);
			$no = 1;
			while($row = mysqli_fetch_array($result)){
				$id_pesanan = $row['id_pesanan']; 
				$sesID = $row['id_admin']; 
				$nama = $row['nama_pembeli']; 
				$no_hp = $row['no_hp_pembeli'];
				$jml = $row['jumlah']; 
				$ttl = $row['grand_total'];
				$tgl = $row['tanggal_pesan'];
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $no_hp; ?></td>
			<td><?php echo $tgl; ?></td>
			<td><?php echo $jml; ?></td>
			<td>Rp. 80000</td>
			<td>Rp. <?php echo $ttl; ?></td>
		</tr>
		<?php
		$no++;
		}
		?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="6">
					<center>TOTAL</center>
				</td>
				<td>
					Rp.
					<?php
                    $query = "SELECT SUM(grand_total) FROM pesanan;";
                    $hasil = mysqli_query($koneksi, $query);
                    while ($row = $hasil->fetch_assoc()) {
                    echo $row['SUM(grand_total)']."<br>";                            
				}
                ?>
				</td>
			</tr>
		</tfoot>
	</table>
	<a href="dash-laporan.php"><p>kembali</p></a>
	<script>
		window.print();
	</script>
</body>
</html>