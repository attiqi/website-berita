<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login The News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    /*body{
      background-image: url("img/bg-2.jpg");
      background-size: 100%;
    }*/
  </style>
  <body>
    <div class="container p-5">
      <div class="row">
        <div class="col-md-6 offset-md-3"  style="background: #9F8772 ; border-radius: 1rem;">
          <form action="cek_login.php" method="post">
            <center>
              <br>
              <p style="font-size: 25px; font-family: sans-serif;"><b>Login Admin</b></p>
              <img class="m-2" src="img/The News.jpg" width="150" height="150" style="border-radius: 20px;">
            </center>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" id="u" aria-describedby="emailHelp" name="u">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="p" name="p">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn" style="background: #EDE4E0;">Submit</button>
            <div>
              <center>
                <p>Home<a href="dashboard.php" style="color: black;"> Back To Home</a></p>
              </center>
            </div>
            <br><br>

          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>