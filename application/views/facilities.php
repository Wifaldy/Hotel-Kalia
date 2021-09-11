  <!-- Headline -->
  <div class="container mt-5">
    <div class="headline">
      <h6 class="text-center" style="font-size: 40px;">FACILITIES</h6>
    </div>
  </div>

  <hr class="mt-5" style="opacity: 0.1;">

  <!-- Content -->
  <div class="container">
    <?php foreach ($facility as $f) : ?>
      <div class="row content mt-5">
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="pt-md-5 pt-lg-0 text-center">
            <img src="<?= base_url() . $f['pict'] ?>" alt="" class="img-content">
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 mt-sm-3 mt-lg-2 mt-md-3">
          <h1 class="ps-lg-5"><i><?= $f['class']; ?></i></h1>
          <p><?= $f['description']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>