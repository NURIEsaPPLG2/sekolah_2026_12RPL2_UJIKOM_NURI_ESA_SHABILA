
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Pengaduan</title>
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
               padding: 20px;
               width: 400px;
               height: 450px;
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
               font-size: 35px;
               margin-top: 40px;
          }  
          label{
               font-family: monospace;
               font-size: 20px;
          }
          input{
               margin-bottom: 15px;
          }     
          select{
               margin-bottom: 15px;
          }
          textarea{
               resize: none;
          }
          button{
               width: 90px;
               height: 50px;
               background: rgb(72, 72, 255);
               color: white;
               border: none;
               border-radius: 10px;
               font-family: monospace;
               font-size: 20px;
               cursor: pointer;
               margin-top: 15px;
          }              
          button:active{
               background: rgb(158, 158, 255);
               color: rgb(226, 226, 226);       
          } 
          a{
            position: absolute;
            top: 30px;
            right: 35px;
            text-decoration: none;
            font-family: monospace;
            font-size: 20px;
            cursor: pointer;
          }
     </style>
</head>
<body>
     <div>
          <a href="dashboard_siswa.php">Dashboard</a>
          <h1>BUAT PENGADUAN</h1>
          <form action="proses_pengaduan.php" method="post">

               <label for="">Kategori</label><br/>
               <?php
               include 'koneksi.php';
               $query = mysqli_query($koneksi, "SELECT * FROM kategori");
               ?>
               <select name="kategori" required>
                    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
               
                    <option value="<?= $data['id_kategori']; ?>"><?= $data['ket_kategori']; ?></option>

                    <?php } ?>
               </select>
               <br/>

               <label for="">Lokasi</label><br/>
               <input type="text" name="lokasi" required/>
               <br/>
     
               <label for="Keterangan">Keterangan</label><br/>
               <textarea name="keterangan" required></textarea>
               <br/>
               <button>Kirim</button>
          </form>
     </div>
</body>
</html>