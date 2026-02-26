
<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>histori/data pengaduan</title>
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
          .tabel-data-admin{
               width: 100%;
               border-collapse: collapse;
               margin-top: 20px;
               background: white;
               font-family: Arial, sans-serif;
               box-shadow: 0 4px 8px rgba(0,0,0,1);
          }
          .tabel-data-admin th{
               background: blue;
               color: white;
               padding: 15px;
               text-align: center;
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
          img{
               width: 120px;
               height: 120px;
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
          <a href="dashboard_admin.php">Dashboard</a>
     </nav>
     <p><b>HISTORI/DATA PENGADUAN</b></p>

     

     <table id="datatable" border="1" cellpadding="10" cellspacing="0" class="tabel-data-admin">
          <tr>
               <th>No</th>
               <th>ID Pengaduan</th>
               <th>nis</th>               
               <th>Nama Kategori</th>
               <th>Lokasi</th>
               <th>Keterangan</th>
               <th>Status</th>
               <th>Tanggal</th>
               <th>Feedback</th>
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
               <td><?= $data['id_pelaporan'] ?></td>
               <td><?= $data['nis'] ?></td>               
               <td><?= $data['ket_kategori'] ?></td>
               <td><?= $data['lokasi'] ?></td>
               <td><?= $data['keterangan'] ?></td>
               <td><?= $data['status'] ?></td>
               <td><?= $data['tanggal'] ?></td>
               <td><?= $data['feedback'] ?></td>
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