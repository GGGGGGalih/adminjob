<?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
  }
   require 'functions.php';
   $jobteknisi = query("SELECT * FROM jobteknisi");

   if(isset($_POST["carijob"])) {
    $jobteknisi = carijob($_POST["keyword"], "jobteknisi");
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
          <a class="nav-link active " href="listjob.php">DAFTAR JOB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="jobselesai.php">JOB SELESAI</a>
        </li>
      </ul>
      <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Search" autocomplete="off">
        <button type="submit" name="carijob">Cari Data JOB</button>
      </form>
    </div>
  </div>
</nav>
        <h1 class="text-center">Data JOB Yang Belum Selesai</h1>
        <br></br>
        <form class="text-center d-grid gap-2 d-md-block" >
            <button class="btn" style="background-color: #45CCF7" type="submit"><a class="text-body" href="tambahjob.php">Tambah JOB</a></button>
        </form>
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
                <th>Actions</th>
            </tr>
            </thead>
            <?php $i = 1;?>
            <?php 
                foreach($jobteknisi as $row) :
            ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["namaclient"];?></td>
                <td><?= $row["alamatClient"];?></td>
                <td><?= $row["kondisi"];?></td>
                <td><?= $row["kontak"];?></td>
                <td><?= $row["tanggaljob"];?></td>
                <td><?= $row["tanggalselesai"];?></td>
                <td><?= $row["solusi"];?></td>
                <td>
                    <a href="ubahjob.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square fs-4"></i></a> |
                    <a href="hapusjob.php?id=<?= $row["id"]; ?>" onclick="return confirm ('yakin hapus?')"><i class="fs-4 bi bi-trash-fill"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php 
                endforeach;
            ?>
        </table>
    </body>
</html>