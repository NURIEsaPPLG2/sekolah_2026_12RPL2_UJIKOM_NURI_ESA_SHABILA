<?php
     session_start();
     include 'koneksi.php';

     $username = $_POST['username'];
     $password = $_POST['password'];
     $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
     $data = mysqli_fetch_assoc($query);

     if($data)
          {
               $_SESSION['username'] = $data['username'];
               $_SESSION['password'] = $data['password'];

               if($data['role']=="admin"){
                    header("location:admin/dashboard_admin.php");
               }
               elseif($data['role']=="siswa"){
                    header("location:dashboard_siswa.php");
               }
          }
          else{
               echo"login gagal";
          }

?>
