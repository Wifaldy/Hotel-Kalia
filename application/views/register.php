<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/register.css">
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

  <form action="" method="POST">
    <div class="d-flex justify-content-center align-items-center " style="height: 80vh;">
      <div class="card " style="margin-top: 4%;">
        <h3 class="text-center pb-4">Sign Up</h3>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" autocomplete="off" value="<?= set_value('name'); ?>">
          <label for="floatingInput">Full Name</label>
          <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email" id="email" autocomplete="off" value="<?= set_value('email'); ?>">
          <label for="floatingInput">Email</label>
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" placeholder="Phone Number" name="no_hp" id="no_hp" autocomplete="off" value="<?= set_value('no_hp'); ?>">
          <label for="floatingInput">Phone Number</label>
          <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password1" id="password1" autocomplete="off">
          <label for="floatingPassword">Password</label>
          <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" placeholder="Repeat Password" name="password2" id="password2" autocomplete="off">
          <label for="floatingPassword">Repeat Password</label>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <p>Already have an account ? click <a class="text-primary toRegister" href="auth">here</a></p>
          <div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
</body>

</html>