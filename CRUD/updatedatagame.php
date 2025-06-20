<?php
include "koneksi.php";


$id = $_POST['id'];
$game =  $_POST['game'];
$uid =   $_POST['uid'];

mysqli_query($koneksi,"UPDATE namagame set game='$game', uid='$uid' where id='$id'");

header("location:admin.php")



?>