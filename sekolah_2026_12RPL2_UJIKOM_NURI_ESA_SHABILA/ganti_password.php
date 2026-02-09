<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
    <style>
        body{
            background: #a5d8ff;
        }        
        div{
            background: #a5d8ff;
            padding-top: 20px;
        }
        h1{
            font-family: monospace;
            font-size: 60px;
        }  
        label{
            font-family: monospace;
            font-size: 20px;
        }   
        input{
            margin-bottom: 20px;
        }   
        button{
            width: 80px;
            height: 40px;
            background: rgb(72, 72, 255);
            color: white;
            border: none;
            border-radius: 5%;
            font-family: monospace;
            font-size: 15px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);       
        }
        .button2{
            background: red;
        }
        .button2:active{
            background: rgb(255, 123, 123);
        }
    </style>
</head>
<body>
    <div>
        <center>
        <h1>GANTI PASSWORD</h1>
        <form method="post">
            <label for="">Password Lama</label>
            <input type="password" name="passwordlama"/>
            <br/>
       
            <label for="">Password Baru</label>
            <input type="password" name="passwordbaru"/>
            <br/>

            <label for="">Konfirmasi Password Baru</label>
            <input type="password" name="konfpassword"/>
            <br/>            
                 
            <button type="submit" name="kirim">Kirim</button>
            <button type="button" onclick="" class="button2">Batal</button>
        </form>
        </center>
    </div>
</body>
</html>
