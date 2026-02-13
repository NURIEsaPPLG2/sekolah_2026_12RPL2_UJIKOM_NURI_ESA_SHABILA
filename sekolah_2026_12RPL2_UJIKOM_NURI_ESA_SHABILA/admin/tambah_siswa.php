<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tambah Data Siswa</title>
</head>
<body>
     <h1>data siswa</h1>
    <form action="simpan_siswa.php" method="POST">  
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
     
      <button>submit</button>
     
    </form>

    <?php
    include "data_siswa.php";
    ?>

</body>
</html>










