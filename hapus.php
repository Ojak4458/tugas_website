<!--hapus data game-->
<?php
include "koneksi.php";
$id =$_GET['id'];
mysqli_query($koneksi, "DELETE from namagame where id='$id'");

header("location:admin.php");


?>