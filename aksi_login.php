<?php
session_start();
include 'koneksi.php';


$username = $_POST['user'];
$password = $_POST['pass'];

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    header("location:admin.php");
}else{
    header("location:latihan9.php?error=Username atau Password salah");
}
?>