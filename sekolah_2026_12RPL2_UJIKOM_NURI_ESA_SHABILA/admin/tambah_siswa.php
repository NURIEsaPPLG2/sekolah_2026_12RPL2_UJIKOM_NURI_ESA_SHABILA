<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tambah Data Siswa</title>
     <style>
         body{
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(to right, #187bcd, #d0efff);
            padding: 20px 40px;
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
         p{
            font-family: tahoma;
            font-size: 25px;
            font-weight: bold;
            text-align: center;
         }
         .form-siswa{
            display: flex;
            gap: 20px;           
            align-items: flex-end;   
            justify-content: center;
            background: blue;
            color: white;
            font-family: monospace;
            font-size: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,1);
            padding: 10px;
            border-radius: 20px;
            margin-bottom: 70px;
         }

         .form-item{
            display: flex;
            flex-direction: column;
         }
         .tombol{
            border: none;    
            width: 60px;
            height: 30px;     
            border-radius: 5px;   
            cursor: pointer; 
            background: white;
         }
         .tombol:active{
            background: grey;
         }
     </style>
</head>
<body>
      <nav>
         <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png">
         <a href="dashboard_admin.php">Dashboard</a>
      </nav>

         <p>TAMBAH SISWA</p>

      <form action="simpan_siswa.php" method="POST" class="form-siswa">  

         <div class="form-item">  
            <label for="">NIS</label> <br/>
            <input type="text" name="nis" required/>
         </div>
     
         <div class="form-item">
            <label for="">USERNAME</label> <br/>
            <input type="text" name="username" required/>
         </div>
     
         <div class="form-item">
            <label for="">KELAS</label> <br/>
            <input type="text" name="kelas" required/>    
         </div>
     
         <div class="form-item">
            <label for="">PASSWORD</label> <br/>
            <input type="text" name="password" requred/>      
         </div>
     
         <div class="form-item">
            <button type="submit" class="tombol">Kirim</button>
         </div>
     
      </form>

    <?php
    include "data_siswa.php";
    ?>

</body>
</html>









