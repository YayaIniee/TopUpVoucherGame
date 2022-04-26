<?php 
if (!isset($_SESSION)) {
  session_start();
}
  require "inc.koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- My CSSStyle -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Goldman&family=Righteous&display=swap" rel="stylesheet">
    <!-- font-family: 'Goldman', cursive; font-family: 'Righteous', cursive; -->

    <!-- logo icon title -->
    <link rel="icon" href="image/iconn.png" type="image/x-icon">

    <title>Top Up Games</title>

  </head>
  <body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand font-nav" href="index.php"><img src="image/icon.png" width="" alt="">Top Up Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link font-nav active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-nav" href="">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-nav" href="">Contact</a>
        </li>



      </ul>
      <form class="">
        <button class="btn font-nav" type="submit">Sign In</button>
        <button class="btn btn-outline-dark font-nav" type="submit">Login</button>
      </form>
    </div>
  </div>
</nav> 

<!-- carausel for banner -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

<!-- game section -->
<section id="layanan">
  <div class="container">
    <div class="row my-4">
      <div class="col-12 text-center">
        <h2>Layanan Kami</h2>
        <span class="sub-title">pilih game kesukaan kamu dan top up segera!</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card p-2" width="22rem">
          <img src="image/card.jpg" alt="">
          <div class="card-body">
            <h5>PUBG MOBILE</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-2" width="22rem">
          <img src="image/card.jpg" alt="">
          <div class="card-body">
            <h5>PUBG MOBILE</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-2" width="22rem">
          <img src="image/card.jpg" alt="">
          <div class="card-body">
            <h5>PUBG MOBILE</h5>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>



  </body>
</html>