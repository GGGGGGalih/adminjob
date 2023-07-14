<?php
session_start();
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}
require 'functions.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"]=true;

            header("Location: index.php");
            exit;
        }
    }$eror = true;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
        <title>LOGIN</title>
    </head>
    <body>
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
              <a class="nav-link active" aria-current="page" href="login.php">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="jumbotron text-center mt-5">
      <h1 class="display-4 fw text-center">HALAMAN LOGIN</h1>
      <h1 class="fs-100 text-center b-3 badge bg-primary">SILAHKAN LOGIN LEBIH DAHULU</h1>
      <?php if (isset($eror)) :  ?>
        <p class="text-danger" style="font-style : italic;">username / password salah</p>
      <?php endif; ?>
      <form action="" method="post">

                <div>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </div> 
                <div class="mb-3"> 
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </div> 

                <form> 
                    <button type="submit" style="background-color: #45CCF7" name="login">Login</button>
                    <p class="mt-2 mb-2">SIGN UP untuk akun admin baru</p>
                    <button type="submit" style="background-color: #45CCF7" name="login"><a href="registrasi.php">SIGN UP</a></button>
                </form> 
            
        </form>
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