<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['nis'] = $data['nis'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == "admin") {
        header("Location: admin/dashboard_admin.php");
    } else if ($data['role'] == "siswa") {
        header("Location: dashboard_siswa.php");
    }
    exit;

} else {
    echo "<script>
            alert('Username atau Password salah!');
            window.location='login.php';
        </script>";
    exit;
}
?>


