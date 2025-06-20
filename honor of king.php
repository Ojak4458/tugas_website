<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Example</title>
   
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <style>
        body {
            background-color: #2c2f33; 
            color: #ffffff;
        }
        .custom-card {
            background-color: #ffffff;
            color: #000000;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .ojak-link{
color: #000;
text-decoration: none;
        }
    </style>
</head>
<body>
<!--navbar-->
<nav class="navbar  navbar-expand-lg bg-warning ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="gambar/kife.png" alt="Logo" height="30">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i>  Beranda</a>
          </li>

          <li class="nav-item me-2">
            <a class="nav-link active" href="periksa.php"><i class="fa-solid fa-magnifying-glass"></i>  Periksa pesanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active"href="riwayat.php" aria-disabled="true"><i class="fa-solid fa-clock-rotate-left"></i>  Riwayat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active"href="voucher.php" aria-disabled="true"><i class="fa-solid fa-ticket"></i>  Voucher</a>
          </li>
     


      </div>
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2 " type="search" placeholder="cari..." aria-label="Search">

      </form>
      <a href="tugas_pas.php"  class="ojak-link"><button class="btn btn-warning ms-auto" type="submit" type="button" class="btn btn-primary ">
                    <i class="fa-solid fa-backward"></i> kembali</a>
    </div>
  </nav>


  <!--navbar-->

  
  <!--carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar/alan.webp" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!--carousel-->







    <div class="container mt-5">
        <h2 class="text-center">Pilih Nominal Layanan</h2>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="custom-card text-center">
                    <h5>Weekly Card</h5>
                    <p>Rp 11,290</p>
                </div>
            </div>
        
            <div class="col-md-3">
                <div class="custom-card text-center">
                    <h5>Weekly Card Plus</h5>
                    <p>Rp 37,134</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
       
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="custom-card text-center">
                    <h5>Weekly Card</h5>
                    <p>Rp 11,290</p>
                </div>
            </div>
         
            <div class="col-md-3">
                <div class="custom-card text-center">
                    <h5>Weekly Card Plus</h5>
                    <p>Rp 37,134</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
