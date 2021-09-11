<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <div class=" ps-lg-5 text-md-center text-lg-start">
        <img src="<?= base_url() . $detailRoom['pict'] ?>" alt="" class="img-content">
      </div>
    </div>
    <div class="col-lg-6">
      <h3 class="text-center mt-lg-0 mt-md-4 mt-sm-4"><?= $detailRoom['class'] ?> Room</h4>
        <hr style="width: 50%; opacity:0.1; margin:auto;">
        <h5 class="mt-4 text-success">Rp <?= number_format($detailRoom['price'], 0, '', '.') ?> / Day</h5>
        <h4 class="description">Description</h4>
        <p><?= $detailRoom['description']; ?></p>
        <div class="row ps-2 pt-1">
          <div class="col-lg-12 amenties pt-4 ">
            <h6 class="ps-lg-3 text-center">Amenties</h6>
            <hr style="width: 40%;" class="mx-auto">
            <div class="row">
              <?php foreach ($facility as $fac) : ?>
                <div class="col-lg-3">
                  <p class="p-amenties text-sm-center text-lg-start"><?= $fac; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <hr>
        <h4>Duration</h4>
        <form action="<?= base_url() ?>order" method="POST">
          <input type="hidden" id="id" name="id" value="<?= $detailRoom['id'] ?>">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="checkin" class="form-label">Check In</label>
                <input type="date" class="form-control" id="checkin" style="width: 62%;" name="checkin">
                <?= $this->session->flashdata('error1') ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="checkout" class="form-label">Check Out</label>
                <input type="date" class="form-control" id="checkout" style="width: 62%;" name="checkout">
                <?= $this->session->flashdata('error2') ?>
              </div>
            </div>
          </div>
          <hr>
          <h4>Available Room</h4>
          <select class="form-select form-select mb-3 mt-3" style="width: 40%;">
            <?php foreach ($avaiRoom as $avai) : ?>
              <option value="<?= $avai['no_room'] ?>">Room <?= $avai['no_room'] ?></option>
            <?php endforeach; ?>
          </select>
          <div class="text-end">
            <button type="submit" class="btn btn-primary mt-2" style="width: 15%;">Book</button>
          </div>
        </form>
    </div>
  </div>
</div>