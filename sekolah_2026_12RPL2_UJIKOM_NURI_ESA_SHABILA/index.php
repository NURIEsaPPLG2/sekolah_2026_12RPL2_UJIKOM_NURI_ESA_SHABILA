<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <style>
        body{
            background: linear-gradient(to right, #187bcd, #d0efff);
            padding-top: 10px;
            padding-left: 40px;
            padding-right: 40px;
        }
        .parent{
            height: 100%;
            width: 100%;
            display: flex;
        }
        .child1{
            width: 900px;
        }
        .child2{
            width: 500px;
        }
        img{
            width: 150px;
            height: 150px;
            margin-left: 250px;
            margin-top: 20px;
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
            font-family: tahoma;
            font-size: 30px;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
        }
        button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);
        }
    </style>
</head>
<body>
    
    <div class="parent">
        <div class="child1"><p><b>SELAMAT DATANG DI WEBSITE PENGADUAN SARANA SEKOLAH</b></p></div>
        <div class="child2">
            <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png">
        </div>
    </div>
    <br>
    <br>
    <a href="login.php"><button>LOGIN</button></a>
</body>
</html>
