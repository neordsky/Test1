<!DOCTYPE html>
<html>

<head>
	<title>UJIKOM 12 RPL 3</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg" style="background-color: #A9A9A9;">
		<div class="container">
			<a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
	if (isset($_GET['page'])) {
		$page = $_GET['page'];

		switch ($page) {
			case 'login':
				include 'login.php';
				break;
			case 'registrasi':
				include 'registrasi.php';
				break;

			default:
				echo "Halaman tidak tersedia";
				break;
		}
	} else {
		include 'home.php';
	}

	?>


	<footer class="footer py-2 bg-light fixed-bottom" style="background-color: #A9A9A9;">
		<div class="container">
			<p class="text-center">LATIHAN UKK | Arif Gunawan | 12 RPL 3</p>
		</div>
	</footer>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>