<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
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
            width: 350px;
            height: 400px;
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
            font-size: 50px;
        }
        label{
            font-family: monospace;
            font-size: 20px;
        }
        input{
            margin-bottom: 20px;
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
            margin-bottom: 15px;
        }
        button:active{
            background: rgb(158, 158, 255);
            color: rgb(226, 226, 226);       
        }
        a{
            position: absolute;
            top: 30px;
            right: 40px;
            text-decoration: none;
            font-family: monospace;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">Back</a>
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
    </div>
     
</body>
</html>


