<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>latihan boot</title>
  <link rel="stylesheet" href="tugas_pas.css" />
  <link rel="stylesheet" href="modal.css" />

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body class=bg-dark>
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
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Beranda</a>
          </li>

          <li class="nav-item me-2">
            <a class="nav-link active" href="periksa.php"><i class="fa-solid fa-magnifying-glass"></i> Periksa
              pesanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="riwayat.php" aria-disabled="true"><i
                class="fa-solid fa-clock-rotate-left"></i> Riwayat</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="voucher.php" aria-disabled="true"><i class="fa-solid fa-ticket"></i>
              Voucher</a>
          </li>



      </div>
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2 " type="search" id="animatedinput" placeholder="cari..." aria-label="Search">

      </form>
      <button class="btn btn-outline-light" type="submit" type="button" class="btn btn-primary" id="openModalBtn">
        <i class="fa-solid fa-right-to-bracket"></i> LOG IN <i class="fa-solid fa-chevron-down"></i>
      </button>

    </div>
  </nav>


  <!--navbar-->

  <!--carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar/lifegameojak.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">

      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">

      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--carousel-->

  <div id="carouselExampleIndicators" class="carousel slide my-5 p-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/Week.png"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="gambar/MCM-265 ID Genshin Impact_Indonesia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="gambar/disc.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!--container-->


    <!--search-->

    <form class="w-full ms-fluid my-3" role="search">
      <input class="form-control w-full me-2 text-center text-dark  " type="text" id="animatedInput" placeholder="" /><i
        class="fa-solid fa-magnifying-glass"></i>

    </form>



    <!--search-->




    <div style="background-color: gray"></div>


    <!--card-->
    <div class="container mt-5">
      <h2 class="text-center mb-4 text-light "><i class="fa-solid fa-gamepad"></i> Game Populer</h2>
      <div class="row">
        <div class="col-md-2 ">
          <div class="card border-warning " id="honor of king">

            <img src="gambar/hok.webp" class="card-img-top" alt="Game 1">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Honor Of King</h5>
              <a href="honor of king.php" class="btn btn-warning btn-outline-light">Top Up</a>
            </div>
          </div>
        </div>

        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/pubh.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">PUBG</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>

        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/cod.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Call Of Duty</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/maling.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">MobileLegend</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/tt.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">TFT</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/str.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Star Rail</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/aovler.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">ArenaOfValor</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/loka.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Loka Pala</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/rune.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center"> Runetera</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/tf.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">TOF</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/ous.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Punishing</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>

        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/blclk.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Black Clover</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/om.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Omyoji Arena</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/und.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">UNDAWN</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/far.jpg" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">FARLIGHT84</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/mt.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Metal Slug</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/li.jpg" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Life After</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/wr.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Wild Rift</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>

        <div class="col-md-2 mb-4">
          <div class="card border-warning ">
            <img src="gambar/coc.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Clash Of clans</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">
            <img src="gambar/vr.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Valorant</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">
            <img src="gambar/blo.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Blod Strike</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">
            <img src="gambar/opm.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">OPM:World</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">
            <img src="gambar/sain.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Saint Seiya </h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <div class="card border-warning ">

            <img src="gambar/sn.webp" class="card-img-top" alt="">
            <div class="card-body bg-dark text-center">
              <h5 class="card-title text-white text-center">Marvel Snap</h5>
              <a href="#" class="btn btn-warning btn-outline-light ">Top Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--card-->


    <!-- Footer -->
    <footer class="container-fluid bg-secondary text-white mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <a class="navbar-brand" href="#">
              <img src="gambar/kife.png" alt="Logo" height="90">
            </a>
            <h5>Tentang Kami</h5>
            <p>Kami adalah penyedia layanan top up game terpercaya dengan berbagai pilihan game yang pupuler dan
              metode
              pembayaran.</p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h5>Kontak</h5>
            <p>Email: lifeforgame@gmail.com</p>
            <p>Telepon: 0851-8878-9034</p>
          </div>
          <div class="col-md-4">
            <h5>Ikuti Kami</h5>
            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ©2024 LifeGame. All rights reserved.
      </div>
    </footer>
    <!--footer-->
    <!--modal ker lojin-->
    <div id="loginModal" class="modal">
      <div class="modal-content modal-sm">
        <span class="close-btn">&times;</span>
        <h2>Login</h2>
        <form id="loginform" method="POST" action="aksi_login.php">
          <td><label for="user">Username:</label></td>
          <input type="text" id="username" name="user" placeholder="Masukkan Username" required>


          <td><label for="pass">password</label></td>
          <td><input type="password" name="pass" id="pass" placeholder="password"></td>

          <button type="submit">Login</button>
        </form>
      </div>
    </div>

    <!--modal ker lojin-->

    <script>
      // amiln elemt modla
      const modal = document.getElementById('loginModal');
      const openModalBtn = document.getElementById('openModalBtn');
      const closeModalBtn = document.querySelector('.close-btn');

      //membuka modal usaha
      openModalBtn.addEventListener('click', () => {
        modal.style.display = 'block';
      });

      // tutup modal usaha x
      closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
      });

      // tutup modal diuai
      window.addEventListener('click', (event) => {
        if (event.target === modal) {
          modal.style.display = 'none';
        }
      });

    </script>

     <script>
    const modal = document.querySelector('.modal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeBtn = document.querySelector('.close-btn');

    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hide');
        modal.classList.add('show');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.remove('show');
        modal.classList.add('hide');
        setTimeout(() => {
            modal.style.display = 'none'; // Tutup modal setelah animasi selesai
        }, 500); // Sesuaikan dengan durasi animasi fadeOut
    });
</script>
<script>
        document.getElementById('loginButton').addEventListener('click', function() {
            const username = document.getElementById('user').value.trim();
            const password = document.getElementById('pass').value.trim();



            
            if (!username || !password) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Username dan password harus diisi!'
                });
            } else {
                // Jika login berhasil
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil!',
                    text: 'Selamat datang!'
                }).then(() => {
                    document.getElementById('loginForm').submit(); // Kirim formulir
                });
            }
        });
    </script>

    <script src="jawascrip.js"></script>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>