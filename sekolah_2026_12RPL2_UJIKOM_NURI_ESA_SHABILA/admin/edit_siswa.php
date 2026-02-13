<?php
include '../koneksi.php';

$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE nis='$nis'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
     $nama = $_POST['username'];
     $kelas = $_POST['kelas'];

     mysqli_query($koneksi, "UPDATE user SET username='$nama',
          kelas='$kelas' WHERE nis='$nis'");
     header("Location: tambah_siswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Edit data siswa</h1>
     <form method="POST">
          Username: <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
          Kelas: <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br>

          <button type="submit" name="submit">Update</button>
     </form>
</body>
</html>