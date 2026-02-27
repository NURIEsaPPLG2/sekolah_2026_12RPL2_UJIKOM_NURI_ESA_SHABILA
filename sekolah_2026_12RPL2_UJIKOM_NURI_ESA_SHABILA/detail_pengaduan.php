<?php 

session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID pelaporan tidak ditemukan!";
    exit;
}

$id = $_GET['id'];


$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
     FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori
     WHERE input_aspirasi.id_pelaporan = '$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data pengaduan tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>detail pengaduan</title>
     <style>
          body{
               background: linear-gradient(to right, #187bcd, #d0efff);
               height: 100vh;
               display: flex;
               align-items: center;
               justify-content: center;
          }     
          .container{
               background: #a5d8ff;
               padding: 30px 40px;
               border-radius: 15px;
               width: 500px;
               box-shadow: 0 8px 20px rgba(0,0,0,0.2);
          }
          h2{
               font-family: tahoma;
               text-align: center;
               margin-bottom: 25px;
          }
          table{
               width: 100%;
               border-collapse: collapse;
          }
          table td{
               padding: 10px;
               vertical-align: top;
          }
          table tr td:first-child{
               font-weight: bold;
               font-family: monospace;
               font-size: 17px;
               width: 35%;
          }
          .isi{
               font-family: monospace;
               font-size: 14px;
               font-weight: bold;
          }
          select, textarea{
               width: 100%;
               padding: 8px;
               border-radius: 6px;
               border: 1px solid ;
               font-size: 14px;
               font-family: monospace;
               font-weight: bold;
          }
          textarea{
               resize: none;
          }
          .actions{
               margin-top: 20px;
               display: flex;
               justify-content: space-between;
          }
          .btn-kembali{
               background: #187bcd;
               color: white;
               padding: 10px 18px;
               border-radius: 8px;
               text-decoration: none;
               font-family: monospace;
               font-size: 17px;
               display: inline-block;
          }
          .btn-kembali:active{
               background: rgb(158, 158, 255);
          }
          a{
               color: white;
               text-decoration: none;
          }
     </style>
</head>
<body>
     <div class="container">
          <h2>Detail Pengaduan</h2>

          <table>
               <tr>
                    <td>ID Pelaporan:</td> 
                    <td class="isi"><?= $data['id_pelaporan'] ?></td>
               </tr>
               <tr>
                    <td>Kategori:</td>
                    <td class="isi"><?= $data['ket_kategori'] ?></td>
               </tr>
               <tr>
                    <td>Lokasi:</td>
                    <td class="isi"><?= $data['lokasi'] ?></td>
               </tr>
               <tr>
                    <td>Keterangan:</td>
                    <td class="isi"><?= $data['keterangan'] ?></td>
               </tr>
               <tr>
                    <td>Status:</td>
                    <td class="isi"><?= $data['status'] ?></td>                        
               </tr>
               <tr>
                    <td>Feedback:</td>                      
                    <td class="isi"><?= $data['feedback'] ? $data['feedback'] : '-' ?></td>
               </tr>
          </table>

          <div class="actions">
               <a href="data_pengaduan.php" class="btn-kembali">Kembali</a>
          </div>
          
     </div>
</body>
</html>
