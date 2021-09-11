<!-- Jumbotron -->
<div class="jumbotron mt-5">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 left mx-auto col-sm-12">
        <h1>Welcome to our Luxury Hotel</h1>
        <p class="mt-3">Welcome to Kalia Hotel Medan, formerly known as Grand Swiss-Belhotel Medan, your premiere choice of modern lifestyle hotel with 242-rooms located in the central business district of Medan, North Sumatera. Our hotel is located in the Cambridge City Square area merging with premium lifestyle Cambridge Mall and Luxurious Condominium that will complete your experience and fulfill your needs.
        </p>
        <a href="room" class="btn btn-outline-success rounded-pill">Book Now <i class="bi bi-arrow-right"></i></a>
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
        <div class="carousel-inner d-flex flex-lg-row">
          <?php foreach ($room as $r) : ?>
            <?php if ($r['class'] == 'Deluxe') : ?>
              <div class="carousel-item active">
              <?php else : ?>
                <div class="carousel-item">
                <?php endif; ?>
                <div class="d-flex flex-items">
                  <img src="<?= base_url() . $r['pict'] ?>" class="d-block w-50 img-items" alt="...">
                  <div class="carousel-item-content">
                    <h4><?= $r['class']; ?></h4>
                    <p><?= $r['description']; ?></p>
                    <?php if ($this->session->has_userdata('email')) : ?>
                      <a href="detail/<?= $r['id'] ?>" class="btn btn-warning text-white rounded-pill">
                      <?php else : ?>
                        <a href="login" class="btn btn-warning text-white rounded-pill">
                        <?php endif; ?>
                        Learn More</a>
                  </div>
                </div>
                </div>
              <?php endforeach; ?>
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

<section class="gallery">
  <div class="container">
    <h1 class="text-center pt-5">Our Gallery</h1>
    <div class="d-flex gallery-flex justify-content-between gallery-flex flex-wrap">
      <div class="card gallery-card" style="width:30%;">
        <img src="<?= base_url() ?>assets/img/Bar.jpg" alt="" class="gallery-items">
      </div>
      <div class="card gallery-card" style="width:30%;">
        <img src="<?= base_url() ?>assets/img/Hall.jpg" alt="" class="gallery-items">
      </div>
      <div class="card gallery-card" style="width:30%;">
        <img src="<?= base_url() ?>assets/img/Pool.jpg" alt="" class="gallery-items">
      </div>
    </div>
  </div>
</section>