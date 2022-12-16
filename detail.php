<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The News Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <?php
      session_start();
      include 'connect.php';
      $sql = "SELECT * FROM konten";
      $datas=$koneksi_server->query($sql);
    ?>
    <?php
      include 'connect.php';
      $id = $_GET['id'];
      $ambildata = mysqli_query($koneksi_server, "SELECT*FROM konten LEFT JOIN artikel ON konten.id = artikel.konten_id WHERE konten.id='$id'");
      $show = mysqli_fetch_array($ambildata);
    ?>
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src="img/The News.jpg" height="60" width="60" style="border-radius: 3rem;">
            <a class="navbar-brand" href="#"><h1>The NeW's</h1></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://localhost/Finalpro/dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Update</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Login</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" style="background: #EDE4E0;" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bg-5.jpg" class="d-block w-100" width="400" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide Sport NeW's</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/bg-4.jpg" class="d-block w-100" width="400" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide Music NeW's</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/bg-1.jpg" class="d-block w-100" width="400" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="container">
        <ul class="nav justify-content-center m-3" style="background: #EDE4E0;">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.html">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lifestyle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Entertainment</a>
          </li>
        </ul>
        <b><hr></b>
      </div>
      <div class="container">
        <center>
          <h1 style="background: #665A48;">Hot NeW's</h1>
        </center>
        <div class="row">
          <form method="post">
          <center>
            <h2><?php echo $show['nama']; ?></h2>
            <img src="admin/upload/<?php echo $show['file'];?>" height="400" width="800">
          </center>
          <p class="m-2">
          <?php echo $show['detail']; ?>
            </p>
            <h5 class="m-2"><?php echo $show['tanggal_up'];?></h5>
        </div>
        </form>
      </div>
      <hr>
      <div class="container p-2">
        <div class="row m-2">
          <div class="col-3 m2">
            <img src="img/d1.jpeg" height="100" width="200">
            <p>Jadwalkan Rapat Kian Mudah,
            Cek Cara Bagikan Google Calendar</p>
          </div>
          <div class="col-3 m2">
            <img src="img/d2.jpeg" height="100" width="200">
            <p>Aksi NIKI 'Lulus SMA' Tutup Head in the Clouds 2022 Day 1</p>
          </div>
          <div class="col-3 m2">
            <img src="img/d3.jpeg" height="100" width="200">
            <p>Dua Jembatan Tertutup Abu Semeru, Akses Malang-Lumajang Belum Aman</p>
          </div>
          <div class="col-3 m2">
            <img src="img/d4.jpeg" height="100" width="200">
            <p>Lee Seung-gi Dikabarkan Akhiri Kontrak dengan Hook Entertainment</p>
          </div>
        </div>
      </div>
      <hr>
      <footer class="text-center text-lg-start bg-white text-muted" style="background: #EDE4E0;">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background: #EDE4E0;">
          <div class="me-5 d-none d-lg-block">
            <img src="img/The News.jpg"  width="50" height="50" style="border-radius: 2rem;">
              <a style="font-size: 16px; align-items: center;"> ||The NeW's</a>
          </div>
          <div>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </section>
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3 text-secondary"></i>Muhammad Attiqi Alghozali
                </h6>
                <p>
                  The NeW's
                </p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> Kediri, Jawa Timur</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  attiqi@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> +6285706403312</p>
              </div>
            </div>
          </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
          © 2022 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Muhammad Attiqi Alghozali</a>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
