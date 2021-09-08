<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <div class="logo">
    <a href="<?= base_url() ?>">
      <img src="<?= base_url() ?>/assets/img/LogoKalia.png" alt="">
    </a>
  </div>

  <form action="<?= base_url('auth') ?>" method="POST">
    <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
      <div class="card">
        <h3 class="text-center pb-4">Login</h3>
        <?= $this->session->flashdata('successReg'); ?>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="email" id="email" autocomplete="off" value="<?= set_value('email'); ?>">
          <label for="floatingInput">Email</label>
          <?= form_error('email', '<small class="text-danger ps-1">', '</small>'); ?>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password" autocomplete="off">
          <label for="floatingPassword">Password</label>
          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <p>Don't have an account ? click <a class="text-primary toRegister" href="register">here</a></p>
          <div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>