<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .ojak-link{
        color: #000;
        text-decoration: none;
        
    }
  </style>
</head>
<body class=bg-secondary>
<!--navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="gambar/kife.png" alt="Logo" height="30">
      </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item"><a class="nav-link" href="periksa.php"><i class="fa-solid fa-magnifying-glass"></i> Periksa Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link active" href="riwayat.php"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pembelian</a></li>
                    <li class="nav-item"><a class="nav-link " href="voucher.php"><i class="fa-solid fa-ticket"></i> Voucher Diskon</a></li>
                   <li>
                    <a href="tugas_pas.php"  class="ojak-link"><button class="btn btn-warning ms-auto" type="submit" type="button" class="btn btn-primary ">
                    <i class="fa-solid fa-backward"></i> kembali</a> </li>
      </button>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar-->

    <div class="container mt-5">
        <h2>Riwayat Pembelian</h2>
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pesanan</th>
                    <th>game</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>2024-11-01</td>
                    <td>Selesai</td>
                    <td>Rp 150,000</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>123456</td>
                    <td>2024-11-01</td>
                    <td>pending</td>
                    <td>Rp 150,000</td>
                </tr>
                <!-- Tambahkan data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</body>
</html>
