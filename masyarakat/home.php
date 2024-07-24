<div class="container">
	<div class="row">
		<div class="col-md-12" mt-3>
			<p>Selamat Datang <?php echo $_SESSION['nama']; ?></p>
			<div class="card">
				<div class="card-header">
					FORM PENGADUAN
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label">Judul Laporan</label>
							<input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Isi Laporan</label>
							<textarea class="form-control" name="isi_laporan" placeholder="Masukkan Isi"required></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Foto</label>
							<input type="file" class="form-control" name="foto" required>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
					</div>
				</form>
				<?php 
				include'../config/koneksi.php';
				$tanggal = date("Y-m-d");
				if (isset($_POST['kirim'])) {
					$nik = htmlspecialchars($_SESSION['nik']);
					$judul_laporan = htmlspecialchars($_POST['judul_laporan']);
					$isi_laporan = htmlspecialchars($_POST['isi_laporan']);
					$status = 0;
					$foto = $_FILES['foto']['name'];
					$tmp = $_FILES['foto']['tmp_name'];
					$lokasi = '../assets/img/';
					$nama_foto = rand(0,999).'-'.$foto;

					move_uploaded_file($tmp, $lokasi.$nama_foto);
					$query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$isi_laporan','$nama_foto','$status')");

					echo " <script>
					alert('Data berhasil dikirim!');
					window.location='index.php';
					</script>
					";
				}

				?>

			</div>
		</div>
	</div>
