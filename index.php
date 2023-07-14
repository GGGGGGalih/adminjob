<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>ADMIN</title>
  </head>
  <body id=>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #3258ff">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="55" height="55">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="indexAdmin.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="teknisi.php">DATA TEKNISI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambahjob.php">JOBDESK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobselesai.php">LAPORAN JOB TEKNISI</a>
            </li>
            <form>
             <button class="btn" style="background-color: #45CCF7" type="submit"><a class="text-body" href="logout.php">LOGOUT</a></button>
            </form>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <section class="jumbotron text-center mt-5">
      <h1 class="display-4 fw">SELAMAT DATANG ADMIN</h1>
      <p class="fs-50 mb-3 badge rounded-pill bg-primary">Klik JOBDESK untuk Menambah Pekerjaan Hari Ini</p>
      <h1 class="text-center mt-5">Enjoy Your Day</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L48,58.7C96,53,192,43,288,48C384,53,480,75,576,106.7C672,139,768,181,864,165.3C960,149,1056,75,1152,53.3C1248,32,1344,64,1392,80L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <footer class="text-center pb-5" style="background-color: #88d8fd">
      <p>Created with <i class="bi bi-fire text-danger"></i> by <a href="https://github.com/Galih509">Galih Cahya Kusuma</a></p>
    </footer>
  </body>
</html>