<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa Pesanan</title>
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

                    <li class="nav-item"><a class="nav-link active" href="periksa.php"><i class="fa-solid fa-magnifying-glass"></i> Periksa Pesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="riwayat.php"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pembelian</a></li>
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
        <h2>Periksa Pesanan</h2>
        <form>
            <div class="mb-3">
                <label for="orderID" class="form-label">ID Pesanan</label>
                <input type="text" class="form-control" id="orderID" placeholder="Masukkan ID Pesanan">
            </div>
            <button type="submit" class="btn btn-warning">Periksa</button>
        </form>
    </div>
</body>
</html>
