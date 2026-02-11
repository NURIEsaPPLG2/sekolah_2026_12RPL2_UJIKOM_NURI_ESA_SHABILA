<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
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
            border-radius: 10px;
            font-family: monospace;
            font-size: 15px;
            cursor: pointer;
        }
        button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);       
        }
    </style>
</head>
<body>
    <div>
        <center>
        <h1>LOGIN</h1>
        <form action="proses_login.php" method="post">
            <label for="">Username</label><br/>
            <input type="text" name="username"/>
            <br/>
       
            <label for="">Password</label><br/>
            <input type="password" name="password"/>
            <br/>
                 
            <button>Login</button>
        </form>
        </center>
    </div>
     
</body>
</html>


