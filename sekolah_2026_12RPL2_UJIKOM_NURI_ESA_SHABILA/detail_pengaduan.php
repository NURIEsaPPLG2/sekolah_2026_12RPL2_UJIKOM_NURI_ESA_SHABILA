<?php

// $nis = $_POST['nis'];
// $kategori = $_POST['kategori'];
// $lokasi = $_POST['lokasi'];
// $keterangan = $_POST['keterangan'];
// 
// echo "NIS: $nis<br/>";
// echo "Kategori: $kategori<br/>";
// echo "Lokasi: $lokasi<br/>"; 
// echo "Keterangan: $keterangan<br/>";
// 
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");
// 
// mysqli_query($koneksi, "INSERT INTO input_aspirasi (id_pelaporan, nis, id_kategori, lokasi, keterangan, status, feedback) 
// -- VALUES (NULL, '$nis', '$kategori', '$lokasi', '$keterangan', 'proses', NULL)");

$sql = "select * from `input_aspirasi`";

$query = mysqli_query($koneksi, $sql);

// perulangan
while($data = mysqli_fetch_array($query)){ ?>
     <p>Lokasi <?php echo $data['lokasi']; ?></p>
     <p>Keterangan <?php echo $data['keterangan']; ?></p>
     <p>Status <?php echo $data['status']; ?>
     <hr/>
<?php } ?>

