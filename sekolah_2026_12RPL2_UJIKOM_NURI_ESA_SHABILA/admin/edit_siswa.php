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
     <style>
          body{
               background: linear-gradient(to right, #187bcd, #d0efff);
               height: 100vh;
               display: flex;
               align-items: center;
               justify-content: center;
          }
          div{
               background: #a5d8ff;
               padding: 17px;
               width: 320px;
               height: 380px;
               display: flex;
               flex-direction: column;
               align-items: center;
               justify-content: center;
               border-radius: 20px;
               box-shadow: 0px 4px 6px rgba(0, 0, 0, 3);
               position: relative;               
          }
          h1{
               font-family: tahoma;
               font-size: 33px;
          }  
          label{
               font-family: monospace;
               font-size: 20px;
          }
          input{
               margin-bottom: 15px;
               height: 20px;
          }    
          button{
               width: 75px;
               height: 40px;
               background: rgb(72, 72, 255);
               color: white;
               border: none;
               border-radius: 10px;
               font-family: monospace;
               font-size: 17px;
               cursor: pointer;
               margin-top: 15px;
          }              
          button:active{
               background: rgb(158, 158, 255);
               color: rgb(226, 226, 226);       
          }  
     </style>
</head>
<body>
     <div>
          <h1>Edit data siswa</h1>
          <form method="POST">

               <label for="">Username</label><br/>
               <input type="text" name="username" value="<?php echo $row['username']; ?>"><br/>

               <label for="">Kelas</label><br/>
               <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br/>

               <button type="submit" name="submit">Update</button>
          </form>
     </div>
</body>
</html>