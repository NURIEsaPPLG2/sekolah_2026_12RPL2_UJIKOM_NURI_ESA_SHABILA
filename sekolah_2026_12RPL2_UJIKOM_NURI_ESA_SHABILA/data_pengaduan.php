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

     <?php include 'koneksi.php';
     $no = 1;
     $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
          FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori");

     while($data = mysqli_fetch_assoc(($query))) { 
     ?>
     <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $data['id_kategori']; ?></td>
          <td><?php echo $data['ket_kategori']; ?></td>
          <td><?php echo $data['lokasi']; ?></td>
          <td><?php echo $data['keterangan']; ?></td>
          <td><?php echo $data['status']; ?></td>
     </tr>
     <?php } ?>
</table>
