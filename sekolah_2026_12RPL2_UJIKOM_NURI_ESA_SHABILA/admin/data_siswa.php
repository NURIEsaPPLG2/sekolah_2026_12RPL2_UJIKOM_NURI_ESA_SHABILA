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
</head>
<body>
     <center>
          <h1>DATA SISWA</h1>
          <table border="1" cellpadding="10" cellspacing="0">
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
                         <a href="edit_siswa.php?nis=<?php echo $row['nis']; ?>">Edit</a>
                         <a href="delete_siswa.php?nis=<?php echo $row['nis']; ?>" 
                              onclick="return confirm('yakin ingin menghapus ini?')">Delete
                         </a>
                    </td>
               </tr>
               <?php } ?>

          </table>
     </center>
</body>
</html>