<?php
session_start();

$nis = $_SESSION['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

mysqli_query($koneksi, "INSERT INTO input_aspirasi (nis, id_kategori, lokasi, keterangan, status, feedback) 
VALUES ('$nis', '$kategori', '$lokasi', '$keterangan', 'menunggu', NULL)");

$id = mysqli_insert_id($koneksi);

echo "<script>
        alert('Pengaduan berhasil terkirim');
        window.location = 'dashboard_siswa.php';
    </script>";
exit;
?>

