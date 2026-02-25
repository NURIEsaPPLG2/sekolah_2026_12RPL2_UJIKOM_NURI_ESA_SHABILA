<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");

if (isset($_POST['ket_kategori'])) {

     $id_kategori  =$_POST['id_kategori'];
     $ket_kategori =$_POST['ket_kategori'];


$query = "INSERT INTO kategori (id_kategori, ket_kategori) VALUES ('$id_kategori', '$ket_kategori')";
};
$hasil = mysqli_query($koneksi, $query);

if ($hasil){
     echo "<script>
     alert('Kategori berhasil disimpan!');
     window.location='tambah_kategori.php';
     </script>";
}else{
     echo "Kategori gagal disimpan" . mysqli_error($koneksi);
}


?>