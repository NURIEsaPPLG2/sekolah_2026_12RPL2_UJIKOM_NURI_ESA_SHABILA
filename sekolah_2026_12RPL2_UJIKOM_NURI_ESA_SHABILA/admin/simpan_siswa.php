<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

if (isset($_POST['username'])) {

     $nama       =$_POST['username'];
     $code  =password_hash($_POST['password'],PASSWORD_DEFAULT); 
     $nomor   =$_POST['nis'];
     $ruangan =$_POST['kelas'];


$query = "INSERT INTO user (id, username, password, nis, kelas) VALUES (NULL, '$nama', '$code', '$nomor', '$ruangan')";
};
$hasil = mysqli_query($koneksi, $query);

if ($hasil){
     echo "<script>
     alert('Data siswa berhasil disimpan!');
     window.location='tambah_siswa.php';
     </script>";
}else{
     echo "Data siswa gagal disimpan" . mysqli_error($koneksi);
}


?>