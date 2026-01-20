<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
VALUES (NULL, '111', '1', 'kelas', 'aaaaaaa', 'proses', NULL);");
?>
