<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>DATA PENGADUAN</h1>

     <table border="1" cellpadding="10" cellspacing="0">
          <tr>
               <th>No</th>
               <th>ID Kategori</th>
               <th>Nama Kategori</th>
               <th>Lokasi</th>
               <th>Keterangan</th>
               <th>Status</th>
               <th>Detail</th>
          </tr>

          <?php
          include '../koneksi.php';
          $no = 1;

          $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
          FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori");

          while($data = mysqli_fetch_assoc($query)){
          ?>

          <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['id_kategori'] ?></td>
               <td><?= $data['ket_kategori'] ?></td>
               <td><?= $data['lokasi'] ?></td>
               <td><?= $data['keterangan'] ?></td>
               <td><?= $data['status'] ?></td>
               <td>
                    <a href="detail_pengaduan.php?id=<?= $data['id_pelaporan'] ?>">
                         <button>Detail</button>
                    </a>
               </td>
          </tr>
          <?php } ?>
     </table>

</body>
</html>
