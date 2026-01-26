<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");
if(!$koneksi){
    echo "koneksi database gagal";
}
// 
// mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
// VALUES (NULL, '111', '1', 'kelas', 'aaaaaaa', 'proses', NULL);");







if (isset($_POST['username'])) {


     $nama       =$_POST['username'];
     $code  =password_hash($_POST['password'],PASSWORD_DEFAULT); 
     $peran  =$_POST['role'];
     $nomor   =$_POST['nis'];
     $ruangan =$_POST['kelas'];


$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

mysqli_query($koneksi,"INSERT INTO user (id, username, password, role, nis, kelas) VALUES (NULL, '$nama', '$code', '$peran', '$nomor', '$ruangan')");
};
?>
