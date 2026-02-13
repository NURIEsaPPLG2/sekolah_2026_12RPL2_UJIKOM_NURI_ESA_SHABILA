<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Pengaduan</title>
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
               font-size: 40px;
          }  
          label{
               font-family: monospace;
               font-size: 20px;
          }
          input{
               margin-bottom: 20px;
          }     
          select{
               margin-bottom: 20px;
          }
          button{
               width: 100px;
               height: 50px;
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
     <center>
     <div>
          <h1>BUAT PENGADUAN</h1>
          <form action="proses_pengaduan.php" method="post">
               <label for="">NIS</label><br/>
               <input type="text" name="nis"/>
               <br/>
               <label for="">Kategori</label><br/>
               <select name="kategori">
                    <option value="1">Fasilitas</option>
                    <option value="2">Lingkungan</option>
                    <option value="3">Pembelajaran</option>
               </select>
               <br/>
               <label for="">Lokasi</label><br/>
               <input type="text" name="lokasi"/>
               <br/>
     
               <label for="Keterangan">Keterangan</label><br/>
               <textarea name="keterangan"></textarea>
               <br/>
               <button>Kirim Pengaduan</button>
          </form>
     </div>
     </center>
</body>
</html>