<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}
require 'functions.php';
if (isset($_POST["submit"]) ){

    if(tambahjob($_POST, "jobteknisi") > 0) {
        echo "<script>
                alert('data job sudah ditambah');
                document.location.href ='listjob.php';
                </script>";
       } else {
        echo "<script>
                alert('data gagal ditambah');
                document.location.href = 'listjob.php';
                </script>";
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" /> 
    <title>Tambah JOB Teknisi</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top pb-1" style="background-color: #3258ff">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="30" height="30">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="jumbotron text-center mt-5">
      <h1 class="display-4">Tambah JOB Teknisi</h1>
      <form class="text-center d-grid gap-2 d-md-block" action="" method="post">
            <ul>
                <div>
                    <label for="namaclient">Nama Client :</label>
                    <input type="text" name="namaclient" id="namaclient">
                </div>
                <div>
                    <label for="alamatClient">Alamat :</label>
                    <input type="text" name="alamatClient" id="alamatClient">
                </div>
                <div>
                    <label for="kondisi">kondisi :</label>
                    <input class="mb-3" type="kondisi" name="kondisi" id="kondisi" required>
                </div>
                <div>
                    <label for="kontak">Kontak :</label>
                    <input class="mb-3" type="text" name="kontak" id="kontak" required>
                </div>
                <div>
                    <label for="tanggaljob">Tanggal Job :</label>
                    <input class="mb-3" type="datetime-local" name="tanggaljob" id="tanggaljob">
                    <!-- <script>
                      var tanggaljob =document.getElementById("tanggaljob");

                      // event listener ketika time diubah
                      tanggaljob.addEventListener("input", function({
                        // dapat nilai dari input
                        var value =tanggaljob.value;
                        // hapus huruf T dari kolom time
                        var formattedValue =value.replace("T", "");
                        tanggaljob.value =formattedValue;
                      }));
                    </script> -->
                  </div>
                <div>
                    <button type="submit" name="submit">Tambahkan JOB</button>
                </div>
            </ul>
        </form>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#88d8fd"
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