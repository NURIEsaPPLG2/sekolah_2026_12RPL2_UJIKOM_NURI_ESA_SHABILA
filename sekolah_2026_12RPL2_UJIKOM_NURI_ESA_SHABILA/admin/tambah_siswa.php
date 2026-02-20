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
         nav{
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
         }

         .form-item{
            display: flex;
            flex-direction: column;
         }
     </style>
</head>
<body>
      <nav>
         <a href="dashboard_admin.php">Dashboard</a>
      </nav>
      <form action="simpan_siswa.php" method="POST" class="form-siswa">  

         <div class="form-item">
            <p>Tambah Siswa</p>
         </div>

         <div class="form-item">  
            <label for="">NIS</label> <br/>
            <input type="text" name="nis"/>
         </div>
     
         <div class="form-item">
            <label for="">USERNAME</label> <br/>
            <input type="text" name="username" />
         </div>
     
         <div class="form-item">
            <label for="">KELAS</label> <br/>
            <input type="text" name="kelas" />    
         </div>
     
         <div class="form-item">
            <label for="">PASSWORD</label> <br/>
            <input type="text" name="password"/>      
         </div>
     
         <div class="form-item">
            <button type="submit">Submit</button>
         </div>
     
      </form>

    <?php
    include "data_siswa.php";
    ?>

</body>
</html>










