<html>
<head>
<title>Data Pengaduan</title>
<style>
     body{
          margin: 0;
          min-height: 100vh;
          background: linear-gradient(to right, #187bcd, #d0efff);
          padding: 20px 40px;
     }
     p{
          font-size: 40px;
          font-family: tahoma;  
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
     img{
            width: 120px;
            height: 120px;
         }       
         nav{
            display: flex;
            align-items: center;      
            justify-content: space-between; 
            padding: 0 40px;
            height: 90px;
         }
     a{
          font-family: monospace;
          color: black;
          font-size: 27px;
          text-decoration: none;
          position: absolute;
          right: 45px;
          top: 35px;
          cursor: pointer;
     }   
     a:active{
          color: white;
     }
</style>
</head>
<body>
     <nav>
          <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png">
          <a href="dashboard_siswa.php">Dashboard</a>
     </nav>
     <p><b>DATA PENGADUAN</b></p>
     <table border="1" cellpadding="10" cellspacing="0" class="tabel-data">
          <tr>
               <th>No</th>
               <th>ID Pengaduan</th>
               <th>Nis</th>
               <th>Nama Kategori</th>
               <th>Lokasi</th>
               <th>Keterangan</th>
               <th>Status</th>
               <th>Feedback</th>
          </tr>

          <?php include 'koneksi.php';
          $no = 1;
          $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
               FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori");

          while($data = mysqli_fetch_assoc(($query))) { 
          ?>
          <tr>
               <td><?php echo $no++; ?></td>
               <td><?php echo $data['id_pelaporan']; ?></td>
               <td><?php echo $data['nis']; ?></td>
               <td><?php echo $data['ket_kategori']; ?></td>
               <td><?php echo $data['lokasi']; ?></td>
               <td><?php echo $data['keterangan']; ?></td>
               <td><?php echo $data['status']; ?></td>
               <td><?php echo $data['feedback']; ?></td>
          </tr>
          <?php } ?>
     </table>
</body>
</html>