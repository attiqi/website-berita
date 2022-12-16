<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
      <?php
        session_start();
        include '../connect.php';
        $sql= "SELECT * FROM artikel";
        $datas = $koneksi_server->query($sql);

        ?>
         <?php
          include "../connect.php";

          $id = $_GET['id'];
          $ambildata = mysqli_query($koneksi_server, "select * from artikel where id='$id'");
          $show = mysqli_fetch_array($ambildata);
         ?>
      <nav class="navbar navbar-expand-lg" style="background-color: #C8DBBE;">
        <div class="container-fluid">
          <img src="../img/The News.jpg" height="60" width="60" style="border-radius: 3rem;">
          <a class="navbar-brand m-2" href="#">Admin Panel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat Datang, <?php echo ($_SESSION['USER'])?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid" style="background-color: #9F8772">
        <div class="row">
          <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky" >
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://localhost/Finalpro/admin/dashboard.php">
                    <i class="fa-solid fa-house-user" style="color: #665A48;"></i>
                    <span style="color: black;">Beranda</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="http://localhost/Finalpro/admin/author.php">
                    <i class="fa-solid fa-pen" style="color: #665A48;"></i>
                    <span style="color: black;">Author</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="http://localhost/Finalpro/admin/artikel.php">
                    <i class="fa-solid fa-file-circle-plus" style="color: #665A48;"></i>
                    <span style="color: black;">Artikel</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="http://localhost/Finalpro/admin/kategori.php">
                    <i class="fa-solid fa-file-pen" style="color: #665A48;"></i>
                    <span style="color: black;">Kategori</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard.php" style="color: black;">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Homepage</li>
              </ol>
            </nav>
            <h1 class="h2">Edit Artikel</h1>
            <p>Selamat Datang, Admin</p>
            <div class="row">
              <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                <div class="card">
                  <h5 class="card-header">Kategori Details</h5>
                  <div class="card-body">
                    <form method="post" action=""> 
                      <div class="form-groupDisabled">
                        <label for="id">ID</label>
                        <div class="input"><input type="text" id="id" name="id" value="<?php echo $show['id']; ?>"></div>
                      </div>
                      <div class="form-group">
                        <label for="id">Konten ID</label>
                        <div class="input"><input type="text" id="konten_id" name="konten_id" value="<?php echo $show['konten_id']; ?>"></div>
                      </div>
                      <div class="form-group">
                        <label for="id">Detail</label>
                        <div class="input"><input type="text" id="detail" name="detail" value="<?php echo $show['detail']; ?>"></div>
                      </div>
                      <div class="form-group">
                        <label for="id">Tanggal Upload</label>
                        <div class="input"><input type="date" id="tanggal_up" name="tanggal_up" value="<?php echo $show['tanggal_up']; ?>"></div>
                      </div>
                      <div class="form-group">
                        <label for="id">Status</label>
                        <div class="input"><input type="text" id="status" name="status" value="<?php echo $show['status']; ?>"></div>
                      </div>
                      <div class="form-group">
                        <label for="id">Author</label>
                        <div class="input"><input type="text" id="author" name="author" value="<?php echo $show['author']; ?>"></div>
                      </div>
                      </div><br>
                      <div class="form-group">
                        <a href="artikel.php" class="btn btn-sm btn-primary" style="background: #9F8772; border-color: #9F8772;">Kembali</a>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </main>
      </div>
    </div>
              <footer class="text-center text-lg-start bg-white text-muted">
          <!-- Section: Social media -->
          <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">

            </div>
            <!-- Left -->

            <!-- Right -->
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
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Muhammad Attiqi Alghozali</a>
          </div>
          <!-- Copyright -->
        </footer>
    </div>
   </body>
</html>


