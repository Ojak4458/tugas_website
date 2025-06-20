<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
<!--
INSER*INTO buku
genre-->


<a href="tambah.php">Tambah</a>

<table border="1">
		<tr>
			<th>id</th>
			<th>game</th>
			<th>UID</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM namagame");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['game']; ?></td>
				<td><?php echo $d['uid']; ?></td>
				<td>
					<a href="editdatagame.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapusdatagame.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
 
</body>
</html>