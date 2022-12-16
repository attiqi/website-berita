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


    $sql= "SELECT * FROM konten";
    $datas = $koneksi_server->query($sql);
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
            <h1 class="h2">Tambah Konten</h1>
            <p>Selamat Datang, Admin</p>
            <div class="row">
              <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                <div class="card">
                  <h5 class="card-header">Artikel Upload</h5>
                  <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data"> 
                      <div class="form-group">
                        <label for="id">ID</label>
                        <div class="input"><input type="text" name="id" id="id"></div>
                      </div>
                      <div class="form-group">
                        <label for="nama">Judul</label>
                        <div class="input"><input type="text" name="nama" id="nama"></div>
                      </div>
                      <div class="form-group">
                        <label for="nama">Isi Konten</label>
                        <div class="input"><input type="text" name="isi" id="isi"></div>
                      </div>
                      <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <div class="input">
                          <select id="kategori_id" name="kategori_id">
                            <?php 
                              $query=mysqli_query($koneksi_server,"SELECT * FROM kategori");
                              while ($k = mysqli_fetch_array($query)){
                                echo "<option value='$k[id]'>$k[jenis]</option>";
                              }
                                ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status">Status</label>
                        <div class="input"><input type="text" id="status" name="status"></div>
                      </div>
                      <div class="form-group">
                        <label for="file">Foto</label>
                        <div class="input"><input type="file" id="file" name="file"></div>
                      </div><br>
                      <div class="form-group">
                        <input type="submit" value="Submit" name="proses" class="btn btn-sm btn-primary" style="background: #9F8772; border-color: #9F8772;">
                        <input type="reset" value="Batal" class="btn btn-sm btn-primary" style="background: #9F8772; border-color: #9F8772;">
                        <a href="author.php" class="btn btn-sm btn-primary" style="background: #9F8772; border-color: #9F8772;">Kembali</a>
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
       <?php
        include "../connect.php";
          if (isset($_POST['proses'])) {
            $direktori ="upload/";
            $file_name = $_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'],$direktori.$file_name);

            mysqli_query($koneksi_server,"insert into konten set 
            nama = '$_POST[nama]',
            isi = '$_POST[isi]',
            kategori_id = '$_POST[kategori_id]',
            status = '$_POST[status]',
            file = '$file_name'");
                 echo "Data Tersimpan";
                 echo "<meta http-equiv=refresh content=2;URL='author.php'>";
            }
            
        ?>
    </div>
   </body>
</html>





<!-- include "../connect.php";
          if (isset($_POST['proses'])) 
            $foto =$_FILES['foto']['name'];
            $lokasi =$_FILES['foto']['tmp_name'];
            $tipefile = $_FILES['foto']['type'];
            $ukuranfile = $_FILES['foto']['size'];

            $error ="";
            if ($foto == "") {
              $query = mysqli_query($koneksi_server,"insert into konten set 
            id = '$_POST[id]',
            nama = '$_POST[nama]',
            isi = '$_POST[isi]',
            kategori_id = '$_POST[kategori_id]',
            status = '$_POST[status]',
            nama = '$_POST[nama]',");
            }else{
              if ($tipefile != "image/jpeg" and $tipefile !="image/jpg" and $tipefile !="iamge/png") {
                $error = "Tipe file tidak didukung";
              }elseif ($ukuranfile >= 1000000) {
                echo $ukuranfile;
                $error = "Ukuran File terlalu besar";
              }else{
                move_uploaded_file($lokasi, "image/".foto);
                $query = mysqli_query($koneksi_server, "INSERT INTO konten set
                  id = '$_POST[id]',
                  nama = '$_POST[nama]',
                  isi = '$_POST[isi]',
                  kategori_id = '$_POST[kategori_id]',
                  status = '$_POST[status]',
                  gambar = '$foto',"); 
              }
            }
             if ($error != "") {
               echo "<meta http-equiv=refresh content=2;URL='tambah_konten.php'>";
             }elseif ($query) {
               echo "data berhasil disimpan";
               echo "<meta http-equiv=refresh content=1;URL='author.php'>";
             }else{
              echo "Tidak Dapat menyimpan DATA!<br>";
              echo mysqli_error();
             } -->