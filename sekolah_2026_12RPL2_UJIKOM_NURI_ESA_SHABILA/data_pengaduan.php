
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Data Pengaduan</title>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

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
     .tabel-datapengaduan{
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
          background: white;
          font-family: Arial, sans-serif;
          box-shadow: 0 4px 8px rgba(0,0,0,1);
     }
     .tabel-datapengaduan th{
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
     nav a{
          font-family: monospace;
          color: black;
          font-size: 27px;
          text-decoration: none;
          position: absolute;
          right: 45px;
          top: 35px;
          cursor: pointer;
     }   
     nav a:active{
          color: white;
     }
     button{
          background: #187bcd;
          border: none;
          padding: 8px;
          color: white;
          cursor: pointer;
     }
     button:active{
          background: rgb(158, 158, 255);
     }
</style>
</head>

<body>
     <nav>
          <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png">
          <a href="dashboard_siswa.php">Dashboard</a>
     </nav>

     <p><b>DATA PENGADUAN</b></p>

     <table id="datatable" class="tabel-datapengaduan">
          <thead>
               <tr>
                    <th>No</th>
                    <th>ID Pengaduan</th>
                    <th>Nis</th>
                    <th>Nama Kategori</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Feedback</th>
                    <th>Detail</th>
               </tr>
          </thead>
          <tbody>

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
               <td>
                    <a href="detail_pengaduan.php?id=<?= $data['id_pelaporan'] ?>">
                         <button>Detail</button>
                    </a>
               </td>
          </tr>
          <?php } ?>

          </tbody>
     </table>

     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

     <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

     <script>
     $(document).ready(function() {
         $('#datatable').DataTable({
               "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "paginate": {
                         "next": "Selanjutnya",
                         "previous": "Sebelumnya"
                    }
               }
          });
     });
     </script>

</body>
</html>