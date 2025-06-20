<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAI</title>

<style>
	table {
		background-color: #ffc107;
	}
</style>

</head>
<body>
    
<a href="admin.php">Kembali</a>

<?php
	include 'utils/function.php';
	if(isset($_POST['tambah'])) {
		tambahGame($_POST);
	}
?>

<form method="post" action="">
		<table align="center" style="margin-top: 125px"  border="2">
			<tr>
				<td>game</td>
				<td><input type="text" name="game"></td>
			</tr>
			<tr>
				<td>uid</td>
				<td><input type="text" name="uid"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="tambah" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>



</body>
</html>