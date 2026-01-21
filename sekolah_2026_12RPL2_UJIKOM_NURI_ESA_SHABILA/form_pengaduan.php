<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form Pengaduan</title>
</head>
<body>
     <h1>HALAMAN PENGADUAN</h1>
     <form action="detail_pengaduan.php" method="post">
          <label for="">NIS</label><br/>
          <input type="text" name="nis"/>
          <br/>

          <label for="">Kategori</label>
          <select name="kategori">
               <option value="1">Fasilitas</option>
               <option value="2">Lingkungan</option>
               <option value="3">Pembelajaran</option>
          </select>
          <br/>

          <label for="">Lokasi</label>
          <input type="text" name="lokasi"/>
          <br/>
          
          <label for="Keterangan">Keterangan</label><br/>
          <textarea name="keterangan"></textarea>
          <br/>

          <button>Kirim Pengaduan</button>
     </form>
</body>
</html>
