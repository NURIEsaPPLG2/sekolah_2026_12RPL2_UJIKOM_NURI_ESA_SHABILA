<?php
include '../koneksi.php';
$query = "SELECT * FROM user WHERE role = 'siswa'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Siswa</title>
     <style>
          h1{
               font-family: tahoma;
               font-size: 25px;
               text-align: center;              
          }
          .tabel-data{
               width: 100%;
               border-collapse: collapse;
               margin-top: 20px;
               background: white;
               font-family: Arial, sans-serif;
               box-shadow: 0 4px 8px rgba(0,0,0,1);
          }
          .tabel-data th{
               background: blue;
               color: white;
               padding: 15px;
               text-align: center;
          }
          .tabel-data td{
               padding: 10px;
               text-align: center;
          }
          a{
               text-decoration: none;
               color: white;
          }
          .klik{
               background: #187bcd;
               border: none;
               padding: 8px;
          }
          .klik:active{
               background: rgb(158, 158, 255);
          }
     </style>
</head>
<body>
     <h1>DATA SISWA</h1>
     <table border="1" cellpadding="10" cellspacing="0" class="tabel-data">
          <tr>
               <th>NIS</th>
               <th>Username</th>
               <th>Kelas</th>
               <th>Aksi</th>
          </tr>

          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
               <td><?php echo $row['nis']; ?></td>
               <td><?php echo $row['username']; ?></td>
               <td><?php echo $row['kelas']; ?></td>
               <td>
                    <button class="klik"><a href="edit_siswa.php?nis=<?php echo $row['nis']; ?>">Update</a></button>
                    <button class="klik"><a href="delete_siswa.php?nis=<?php echo $row['nis']; ?>" 
                         onclick="return confirm('yakin ingin menghapus ini?')">Delete
                    </a></button>
               </td>
          </tr>
          <?php } ?>

     </table>
</body>
</html>