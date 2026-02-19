<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Siswa</title>
     <style>
        body{
            background: linear-gradient(to right, #187bcd, #d0efff);
            margin: 0;
            padding-left: 50px;
            padding-right: 40px;
        }         
         div{
            height: 100%;
            width: 100%;
         }
         p{
            font-size: 50px;
            font-family: tahoma;             
         }
         button{
            width: 180px;
            height: 70px;
            background: rgb(72, 72, 255);
            color: white;
            border: none;
            border-radius: 15px;
            font-family: monospace;
            font-size: 20px;
            cursor: pointer;   
            margin-bottom: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
         }
         button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);
        }
        .logout{
            font-family: monospace;
            color: black;
            font-size: 27px;
            text-decoration: none;
        }    
        .logout:active{color: white;}
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
     </style>
</head>
<body>
    <nav>
        <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png">
        <a href="login.php" class="logout">Logout</a>
    </nav>
    <div>
        <p>
            <b>SELAMAT DATANG
            <?php echo $_SESSION['username']; ?>
            DI WEBSITE PENGADUAN SARANA SEKOLAH</b>
        </p>
        <a href="form_pengaduan.php"><button>Buat Pengaduan</button></a><br/>
        <a href="data_pengaduan.php"><button>Data Pengaduan</button></a><br/>
        <a href=""><button>Ganti Password</button></a><br/>
    </div>
</body>
</html>












