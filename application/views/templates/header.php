<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/<?= $style ?>.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="home">
        <img src="<?= base_url() ?>/assets/img/LogoKalia.png" alt="" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item item">
            <a class="nav-link text-success" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item item">
            <a class="nav-link text-success" href="<?= base_url() ?>room">Rooms</a>
          </li>
          <li class="nav-item item">
            <a class="nav-link text-success" href="<?= base_url() ?>facilities">Facilities</a>
          </li>
          <div class="vertical-border"></div>
          <?php if ($this->session->has_userdata('email')) : ?>
            <li class="nav-item">
              <a href="<?= base_url() ?>profile" class="d-flex profiles">
                <img src="<?= base_url() . '/assets/img/profile/' . $user['ava'] ?>" alt="Profile" class="profile">
                <p class="prof-text text-success">Profile</p>
              </a>
            </li>
          <?php else : ?>
            <li class="nav-item ">
              <a class="nav-link text-success item" href="<?= base_url() ?>login">Login</a>
            </li>
            <a class="nav-link btn btn-success text-white me-1 register" href="<?= base_url() ?>auth/register" style="width: 90px;">Register</a>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>