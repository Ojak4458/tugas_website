<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="topupgame";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()) {
   
    echo "koneksi database gagal :" . mysqli_connect_error();
}


?>

