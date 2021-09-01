<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/view/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url() ?>/assets/img/LogoKalia.png" alt="" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link text-success" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-success" href="#">Facilities</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-success" href="#">About</a>
          </li>
          <div class="vertical-border"></div>
          <li class="nav-item ">
            <a class="nav-link text-success" href="login">Login</a>
          </li>
          <a class="nav-link btn btn-success text-white me-1 register" href="register" style="width: 90px;">Register</a>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Jumbotron -->
  <div class="jumbotron mt-5">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6 left mx-auto col-sm-12">
          <h1>Welcome to our Luxury Hotel</h1>
          <p class="mt-3">Welcome to Kalia Hotel Medan, formerly known as Grand Swiss-Belhotel Medan, your premiere choice of modern lifestyle hotel with 242-rooms located in the central business district of Medan, North Sumatera. Our hotel is located in the Cambridge City Square area merging with premium lifestyle Cambridge Mall and Luxurious Condominium that will complete your experience and fulfill your needs.
          </p>
          <a href="#" class="btn btn-success rounded-pill">Book Now <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="col-lg-6 mx-auto col-sm-12">
          <img src="<?= base_url() ?>assets/img/Hotel.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


  <!-- Section 1 -->
  <section class="room">
    <div class="container">
      <h1 class="pt-5 text-center">Rooms</h1>
      <div class="container-carousel pt-3">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
          <div class="carousel-inner d-flex flex-lg-row card">
            <div class="carousel-item active">
              <div class="d-flex flex-items">
                <img src="<?= base_url() ?>assets/img/Deluxe.jpg" class="d-block w-50 img-items" alt="...">
                <div class="carousel-item-content">
                  <h4>Deluxe</h4>
                  <p>Our stylish 88 Deluxe Rooms are 30 square meters in size, equipped with deluxe amenities including individual reading lamps and bathtubs that provide complete comfort and convenience.</p>
                  <a href="" class="btn btn-warning text-white rounded-pill">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-items">
                <img src="<?= base_url() ?>assets/img/SuperiorDeluxe.jpg" class="d-block w-50 img-items" alt="...">
                <div class="carousel-item-content">
                  <h4>SuperiorDeluxe</h4>
                  <p>Our 116 spacious Superior Deluxe rooms, ranging from 33 - 38.72 square meters, with different artistic interior in each room that create an elegant and relaxing ambiance with a working desk and chair.</p>
                  <a href="" class="btn btn-warning text-white rounded-pill">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-items">
                <img src="<?= base_url() ?>assets/img/JuniorSuite.jpg" class="d-block w-50 img-items" alt="...">
                <div class="carousel-item-content">
                  <h4>JuniorSuite</h4>
                  <p>14 spacious rooms with 47.23 square meters in size, the Junior Suite Room consists of an elegant living room featuring 2 armchairs and a lounge, equipped with amenities to pamper your needs. Only one room is available on each floor, with high-end facilities guaranteed to provide pure comfort.</p>
                  <a href="" class="btn btn-warning text-white rounded-pill">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-items">
                <img src="<?= base_url() ?>assets/img/Suite.jpg" class="d-block w-50 img-items" alt="...">
                <div class="carousel-item-content">
                  <h4>Suite</h4>
                  <p>Measuring a very generous 75.6 square meters, our 6 Suites consist of of an elegantly-designed bedroom and living room, complete with a stunning, unobstructed view of the city from the 22nd and 23rd floor. Tune in to a multitude of satellite channels on the 42” LCD TV, surf the web with our high-speed broadband internet, or just lay back and enjoy the luxury atmosphere.</p>
                  <a href="" class="btn btn-warning text-white rounded-pill">Learn More</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="d-flex flex-items">
                <img src="<?= base_url() ?>assets/img/PresidentialSuite.jpg" class="d-block w-50 img-items" alt="...">
                <div class="carousel-item-content">
                  <h4>PresidentialSuite</h4>
                  <p>The ultimate choice of residence and excellence at Cambridge Hotel Medan, our Presidential Suite measures a stunning 174 square meters! This top-floor suite provides an unrivaled view of the city and has it all including an elegantly designed bedroom and separate living room. Beautifully equipped with high-end amenities throughout with all the additional hotel services you could ever desire. </p>
                  <a href="" class="btn btn-warning text-white rounded-pill">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <i class="bi bi-chevron-left fs-1"></i>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <i class="bi bi-chevron-right fs-1"></i>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery" style="height: 500px;">
    <div class="container">
      <h1 class="text-center pt-5">Our Gallery</h1>
      <div class="d-flex pt-4 gallery-flex justify-content-center flex-row gallery-flex">
        <div class="card " style="width: 25%;">
          <img src="<?= base_url() ?>assets/img/Bar.jpg" alt="" class="rounded">
        </div>
        <div class="card " style="width: 25%;">
          <img src="<?= base_url() ?>assets/img/Hall.jpg" alt="" class="rounded">
        </div>
        <div class="card " style="width: 25%;">
          <img src="<?= base_url() ?>assets/img/Pool.jpg" alt="" class="rounded">
        </div>
      </div>
    </div>
  </section>


  <footer style="background-color: black; height:500px;">
    <div class="container">

    </div>
  </footer>






  <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
</body>

</html>