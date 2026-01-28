<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>
</head>
<body>
     <div>
          <div class="judul"><h1>SELAMAT DATANG DI WEBSITE PENGADUAN MUTU</h1></div>
          <div class="tombol"><a href="form_pengaduan.php"><button>Buat Pengaduan</button></a><br/>
          <a href="cari_pengaduan.php"><button>Cari Pengaduan</button></a></div>
     </div>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>







