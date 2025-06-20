
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher Diskon</title>
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
                    <li class="nav-item"><a class="nav-link" href="riwayat.php"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pembelian</a></li>
                    <li class="nav-item"><a class="nav-link active" href="voucher.php"><i class="fa-solid fa-ticket"></i> Voucher Diskon</a></li>
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
        <h2>Voucher Diskon</h2>
        <div class="row">
            <!-- Kartu Voucher 1 -->
            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body">
                    <img src="gambar/hok.webp" class="card-img-top" alt="Game 1">
                        <h5 class="card-title">Voucher Diskon 10%</h5>
                        <p class="card-text">Dapatkan diskon 10% untuk pembelian berikutnya.</p>
                        <button class="btn btn-warning text">Gunakan Voucher</button>
                    </div>
                </div>
            </div>
            <!-- Kartu Voucher 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Diskon Rp 50,000</h5>
                        <p class="card-text">Potongan harga Rp 50,000 untuk transaksi minimum Rp 500,000.</p>
                        <button class="btn btn-warning">Gunakan Voucher</button>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak kartu voucher jika diperlukan -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
