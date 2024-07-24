<!DOCTYPE html>
<html>

<head>
  <title>UJIKOM 12 RPL 3 | ARIF GUNAWAN |</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">


</head>
<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #877e75">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="color:black;">Aplikasi Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

          <?php
          if ($_SESSION['login']=='admin') { ?>
            <a class="nav-link" href="index.php?page=tanggapan" style="color:black;">Data Tanggapan</a>
            <a class="nav-link" href="index.php?page=pengaduan" style="color:black;">Data Pengaduan</a>
            <a class="nav-link" href="index.php?page=masyarakat" style="color:black;">Data Masyarakat</a>
            <a class="nav-link" href="index.php?page=petugas" style="color:black;">Data Petugas</a>
            <a class="nav-link" href="../config/aksi_logout.php" style="color:black;">Keluar</a>

          <?php }else if ($_SESSION['login']=='petugas'){ ?>
            <a class="nav-link" href="index.php?page=pengaduan" style="color:black;">Data Pengaduan</a>
            <a class="nav-link" href="index.php?page=tanggapan" style="color:black;">Data Tanggapan</a>
            <a class="nav-link" href="../config/aksi_logout.php" style="color:black;">Keluar</a>

           <?php  }else if ($_SESSION['login']=='masyarakat'){ ?>
            <a class="nav-link" href="index.php?page=riwayat_tanggapan&nik=<?php echo $_SESSION['nik']?>"><b>RIWAYAT PENGADUAN</b></a>
            <a class="nav-link" href="../config/aksi_logout.php" style="color:black;"><b>Keluar</b></a>

          <?php  }else if ($_SESSION['login']=='masyarakat'){ ?>
            <a class="nav-link" href="../config/aksi_logout.php" style="color:black;">Keluar</a>

          <?php  }else{ ?>
            <a class="nav-link" href="index.php?page=registrasi" style="color:black;">Daftar Akun</a>
            <a class="nav-link" href="index.php?page=login" style="color:black;">Login</a>

          <?php } ?>


        </ul>
      </div>
    </div>
  </nav>