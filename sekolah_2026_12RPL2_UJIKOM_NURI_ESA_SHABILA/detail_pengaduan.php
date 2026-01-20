<?php

echo $nis = $_POST['nis'];
// echo $kategori = $_POST['kategori'];
echo $lokasi = $_POST['lokasi'];
echo $keterangan = $_POST['keterangan'];


$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
VALUES (NULL, '$nis', '1', '$lokasi', '$keterangan', 'proses', NULL);");

?>
