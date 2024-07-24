<?php 
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi, "SELECT * FROM masyarakat");
$jml_masyarakat = mysqli_num_rows($masyarakat);

$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jml_petugas = mysqli_num_rows($petugas);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$jml_pengaduan = mysqli_num_rows($pengaduan);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
$jml_tanggapan = mysqli_num_rows($tanggapan);
?>

<div class="container">
	<body style="background-color: #CFCFCF">
		<h3 class="mt-3">Dashbord</h3>
		<div class="row mt-3">
			<div class="col-md-3 mt-3">
				<div class="card">
					<div class="card-header" style="background-color: #7E7E7E">Masyarakat</div>
					<div class="card-body"><?php echo $jml_masyarakat; ?> Orang</div>
				</div>
			</div>
			<div class="col-md-3 mt-3">
				<div class="card">
					<div class="card-header" style="background-color: #7E7E7E">Pengaduan</div>
					<div class="card-body" style="background-color: B1B1B1"><?php echo $jml_pengaduan; ?> Aduan</div>
				</div>
			</div>
			<div class="col-md-3 mt-3">
				<div class="card">
					<div class="card-header" style="background-color: #7E7E7E">Tanggapan</div>
					<div class="card-body"><?php echo $jml_tanggapan; ?> Tanggapan</div>
				</div>
			</div>
			<div class="col-md-3 mt-3">
				<div class="card">
					<div class="card-header" style="background-color: #7E7E7E">Petugas</div>
					<div class="card-body"><?php echo $jml_petugas; ?> Pengguna</div>
				</div>
			</div>
		</body>	

	</div>
</div>