<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard Admin</title>
     <style>
        body{
            background: #a5d8ff;
            padding-top: 20px;
            padding-left: 40px;
            padding-right: 40px;
        }                  
        div{
            height: 100%;
            width: 100%;
            background: #a5d8ff;
        }
        p{
            font-size: 50px;
            font-family: monospace;             
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
        }
        button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);
        }              
        .logout{
            float: right;
            font-family: monospace;
            color: rgb(255, 46, 46);
            font-size: 27px;
        }                      
     </style>
</head>
<body>
    <div>
        <a href="../login.php" class="logout">Logout</a><br/>
        <p>SELAMAT DATANG ADMIN DI WEBSITE PENGADUAN SARANA SEKOLAH</p>
        <a href="tambah_siswa.php"><button>Tambah Data Siswa</button></a><br/>
        <a href=""><button>Data Siswa</button></a><br/>
        <a href=""><button>Tambah Kategori</button></a><br/>
        <a href="data_pengaduan.php"><button>Histori/Data Pengaduan</button></a><br/>
    </div>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
