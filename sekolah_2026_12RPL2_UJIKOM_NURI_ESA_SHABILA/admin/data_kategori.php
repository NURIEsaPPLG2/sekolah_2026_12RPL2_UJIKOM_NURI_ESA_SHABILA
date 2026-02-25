<?php
include '../koneksi.php';
$query = "SELECT * FROM kategori";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Data Kategori</title>
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
     <h1>DATA KATEGORI</h1>
     <table border="1" cellpadding="10" cellspacing="0" class="tabel-data">
          <tr>
               <th>ID Kategori</th>
               <th>Nama Kategori</th>
               <th>Aksi</th>
          </tr>

          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
               <td><?php echo $row['id_kategori']; ?></td>
               <td><?php echo $row['ket_kategori']; ?></td>
               <td>
                    <button class="klik"><a href="edit_kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>">Update</a></button>
                    <button class="klik"><a href="delete_kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" 
                         onclick="return confirm('yakin ingin menghapus ini?')">Delete
                    </a></button>
               </td>
          </tr>
          <?php } ?>

     </table>
</body>
</html>