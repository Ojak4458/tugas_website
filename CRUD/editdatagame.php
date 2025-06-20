<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
</head>
<body>
    <a href="admin.php">Kembali</a>

    <?php
   
   include "koneksi.php";
   $id = $_GET['id'];
   $data = mysqli_query($koneksi, "SELECT * FROM namagame where id='$id'");
   while($d = mysqli_fetch_array($data)){
    ?>
  <form method="POST" action="updatedatagame.php">
  <table>
		<tr>			
			<td>game</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<input type="text" name="game" value="<?php echo $d['game']; ?>">
			</td>
		</tr>
		<tr>
			<td>uid</td>
			<td><input type="text" name="uid" value="<?php echo $d['uid']; ?>"></td>
		</tr>
		<tr>
	</td>
			<td><input type="submit" value="SIMPAN"></td>
		</tr>		
	</table>
	</form>
<?php
   }
?>
</body>
</html>