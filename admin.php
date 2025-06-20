
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman admin</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      display: flex;
      min-height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .sidebar {
      width: 250px;
      background-color: #ffcc00;
      color: black;
      transition: width 0.3s;
      overflow: hidden;
    }
    .sidebar .nav-link {
      color: black;
      padding: 10px;
      border-bottom: 1px solid #495057;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
    }
    .content {
      flex-grow: 1;
      padding: 20px;
    }
    .btn-tiggle{
      background-color: #ffcc00;
    }
    .btn-toggle {
      margin: 10px;
      background-color: #ffcc00;
      color: black;
      border: none;
      cursor: pointer;
    }
    .btn-toggle:hover {
      background-color: #6c757d;
    }

  
	.b-link{
		color: #fff;
		
		text-decoration: none;
	}
	.a-link{
		color: #fff;
		
		text-decoration: none;
	}
        /*.bedul-link{
            color: #ff;

            text-decoration: none;
        }*/
       
  </style>
</head>
<body>
 







  <div id="sidebar" class="sidebar">
    <h4 class="text-center py-3">Admin Panel</h4>
    <nav class="nav flex-column">
      <a href="#" class="nav-link">Dashboard</a>
      <a href="#" class="nav-link">pesanan</a>
      <a href="#" class="nav-link">kelola transaksi</a>
      <a href="#" class="nav-link">kelola data</a>
      <a href="tambah.php" class="nav-link">tambahkan data game</a>
    
    </nav>
  </div>

 


  <div class="content">
    <button id="toggleSidebar" class="btn btn-toggle">Sembunyikan</button>
    <button onclick="confirmLogout()" class="btn btn-toggle">LOG OUT</button>

    <h1>Selamat Datang di Halaman Admin</h1>
    <p>Di sini Anda dapat mengelola transaksi, pengguna, dan lainnya.</p>
   
   
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>id</th>
          <th>game</th>
          <th>uid</th>
          <th>Opsi</th>
         
        </tr>
      </thead>
      
   

<script>
function confirmLogout() {
    // peringatna setelah di klik
    var confirmation = confirm("Apakah kamuh yakin ingin logout?");
    
    // kalo saya klik bakalan ke logout php
    if (confirmation) {
        window.location.href = 'logout.php'; // bakalan ke halm logout
    }
}
</script>
     

      		<!--read\menampilkna data-->
		<?php 
		include 'koneksi.php';
    include 'utils/function.php';
		$no = 1;
    $data = getDataGame();
			?>
      <?php foreach($data as $d) :?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $d['game']; ?></td>
				<td><?php echo $d['uid']; ?></td>
				<td>
                <button class="btn btn-primary btn-sm"><a href="editdatagame.php?id=<?php echo $d['id']; ?> " class="b-link">EDIT<i class="fa-solid fa-pencil"></i></a></button>
				<button class="btn btn-danger btn-sm"><a href="hapus.php?id=<?php echo $d['id']; ?>" class="a-link"  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">HAPUS <i class="fa-solid fa-trash"></i></a></button>
				</td>
			</tr>
      <?php $no++;?>
      <?php endforeach;?>
    </table>
 
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', () => {
      if (sidebar.style.width === '250px' || sidebar.style.width === '') {
        sidebar.style.width = '0';
      } else {
        sidebar.style.width = '250px';
      }
    });
  </script>
</body>
</html>
