<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="logo">
    <a href="Home">
      <img src="<?= base_url() ?>/assets/img/LogoKalia.png" alt="">
    </a>
  </div>


  <form action="afterLogin" method="POST">
    <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
      <div class="card">
        <h3 class="text-center pb-5">Login</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" id="username" autocomplete="off">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password" autocomplete="off">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <p>Belum memiliki akun? Daftar <a class="text-primary toRegister" href="#">disini</a></p>
          <div>
            <button type="submit" class="btn btn-primary" style="width: 80px;">Login</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
</body>

</html>