<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}
require 'functions.php';
    $id = $_GET["id"];
    $jobtkn = query("SELECT * FROM jobteknisi WHERE id = $id")[0];
    

if (isset($_POST["submit"]) ){

    if(ubahjob($_POST) > 0) {
        
        echo "<script>
                alert('data job dikirim');
                document.location.href ='jobselesai.php';
                </script>";
       } else {
            echo "<script>
                    alert('data gagal dikirim');
                    document.location.href = 'jobselesai.php';
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
        <title>Ubah Job Teknisi</title>
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
        <h1 class="display-4">Ubah Job Teknisi</h1>
        <form action="" method="post" class="text-center d-grid gap-2 d-md-block">
            <input type="hidden" name="id" value="<?= $jobtkn["id"]; ?>">
            <ul>
                <div>
                    <label for="namaclient">Nama Client:</label>
                    <input type="text" name="namaclient" id="namaclient" value="<?= $jobtkn["namaclient"]; ?>">
                </div>
                <div>
                    <label for="alamatClient">Alamat Client :</label>
                    <input type="text" name="alamatClient" id="alamatClient" value="<?= $jobtkn["alamatClient"]; ?>">
                </div>
                <div>
                    <label for="kondisi">Kondisi :</label>
                    <input type="text" name="kondisi" id="kondisi" 
                    value="<?= $jobtkn["kondisi"]; ?>">
                </div>
                <div>
                    <label for="kontak">Kontak :</label>
                    <input type="text" name="kontak" id="kontak" 
                    value="<?= $jobtkn["kontak"]; ?>">
                </div>
                <div>
                    <label for="tanggaljob">Tanggal Job :</label>
                    <input type="date-local" name="tanggaljob" id="tanggaljob"
                    value="<?= $jobtkn["tanggaljob"]; ?>">
                </div>
                <div>
                    <label for="tanggalselesai">Tanggal Selesai :</label>
                    <input type="datetime-local" name="tanggalselesai" id="tanggalselesai" required
                    value="<?= $jobtkn["tanggalselesai"]; ?>">
                    <script>
                      var tanggalselesai =document.getElementById("tanggalselesai");

                      tanggalselesai.addEventListener("input", function({
                        var value =tanggalselesai.value;
                    var formattedValue =value.replace("T", "");
                    tanggalselesai.value =formattedValue;
                      }));
                    </script>
                </div>
                <div>
                    <label for="solusi">Solusi Penanganan :</label>
                    <input type="text" name="solusi" id="solusi" required
                    value="<?= $jobtkn["solusi"]; ?>">
                </div>
                <div>
                    <button type="submit" name="submit">Ubah Data</button>
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