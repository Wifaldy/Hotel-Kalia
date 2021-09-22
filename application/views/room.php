<!-- Headline -->
<div class="container mt-5">
  <div class="headline">
    <h6 class="text-center" style="font-size: 40px;">ROOMS</h6>
  </div>
</div>
<hr class="mt-5" style="opacity: 0.1;">
<!-- Content -->
<div class="container ">
  <?php foreach ($room as $r) : ?>
    <div class="row mt-5">
      <div class=" col-lg-6 col-md-6 col-sm-12">
        <div class="text-center">
          <img src="<?= base_url() . $r['pict']; ?>" alt="<?= $r['class']; ?> Room" class="img-content">
        </div>
      </div>
      <div class=" col-lg-6 col-md-6 col-sm-12">
        <div class="content text-lg-start text-sm-center text-md-start">
          <h6 class=" mt-lg-5 mt-sm-5 mt-md-0 "><?= $r['class']; ?> Room</h6>
          <p class=" pe-lg-5"><?= $r['description']; ?></p>
          <a href="<?= base_url() . 'detail/' . $r['id'] ?>" class="btn btn-warning mt-3 rounded-pill text-white">Learn More</a>
        </div>
      </div>
    </div>
    <hr class=" mt-5" style="width: 90%; margin:auto">
  <?php endforeach; ?>
</div>