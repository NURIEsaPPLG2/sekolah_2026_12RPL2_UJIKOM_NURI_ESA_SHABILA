<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>data siswa</h1>
    <form action="" method="POST">  
     <div>  
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
     </div>
     
     <div>
        <label for="">USERNAME</label> <br/>
        <input type="text" name="username" />
     </div>
     
     <div>
        <label for="">KELAS</label> <br/>
        <input type="text" name="kelas" />    
     </div>
     
     <div>
        <label for="">PASSWORD</label> <br/>
        <input type="text" name="password"/>      
     </div>
     
     <div>
        <label for="">ROLE</label> <br/>
        <select name="role">
            <option VALUES="siswa" >siswa</option>
            <option VALUES="admin" >admin</option>
        </select>
         <br/>
     </div>
     
     
        <button>submit</button>
     
    </form>
</body>
</html>

<?php
if (isset($_POST['username'])) {




     $nama       =$_POST['username'];
     $code  =password_hash($_POST['password'],PASSWORD_DEFAULT); 
     $peran  =$_POST['role'];
     $nomor   =$_POST['nis'];
     $ruangan =$_POST['kelas'];




$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_nuriesa");


mysqli_query($koneksi,"INSERT INTO user (id, username, password, role, nis, kelas) VALUES (NULL, '$nama', '$code', '$peran', '$nomor', '$ruangan')");
};
?>
