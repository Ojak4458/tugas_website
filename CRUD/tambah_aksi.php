<?php
include "koneksi.php";

$id  = $_POST['id'];
$game  = $_POST['game'];
$uid   = $_POST['uid'];



mysqli_query($koneksi,"INSERT into namagame values('$id','$game','$uid')");



    header("location:admin.php");

?>