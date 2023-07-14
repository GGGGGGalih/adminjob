<?php
   require 'functions.php';
   $jobkelar = query("SELECT * FROM jobkelar");

   if(isset($_POST["carijob"])) {
    $jobkelar = carijob($_POST["keyword"], "jobkelar");
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">   
    <title>
            TEKNISI 
        </title>
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5" style="background-color: #45CCF7">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="listjob.php">DAFTAR JOB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="jobselesai.php">JOB SELESAI</a>
        </li>
      </ul>
      <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Search" autocomplete="off">
        <button type="submit" name="carijob">Cari Data JOB</button>
      </form>
    </div>
  </div>
</nav>
        <h1 class="text-center">Data JOB Yang Selesai</h1>
        <br></br>
        <table class="text-center table table-bordered">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama Client</th>
                <th>Alamat</th>
                <th>kondisi</th>
                <th>Kontak</th>
                <th>Tanggal Job</th>
                <th>Tanggal Selesai</th>
                <th>Solusi</th>
            </tr>
            </thead>
            <?php $i = 1;?>
            <?php 
                foreach($jobkelar as $row) :
            ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["namaclient"];?></td>
                <td><?= $row["alamatClient"];?></td>
                <td><?= $row["kondisi"];?></td>
                <td><?= $row["kontak"];?></td>
                <td><?= $row["tanggaljob"]?></td>
                <td><?= $row["tanggalselesai"];?></td>
                <td><?= $row["solusi"];?></td>
            </tr>
            <?php $i++; ?>
            <?php 
                endforeach;
            ?>
        </table>
    </body>
</html>