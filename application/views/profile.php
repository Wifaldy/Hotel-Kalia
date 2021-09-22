  <!-- Profile -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-center pe-sm-5 pe-lg-o">
          <div class="text-center">
            <img src="<?= base_url() . '/assets/img/profile/' . $user['ava'] ?>" alt="Profile" class="profile-display">
            <form action="updatephoto" method="POST" id="submit-foto" enctype="multipart/form-data">
              <label for="image" id="select-file">Upload File</label>
              <input type="file" name="image" id="image" hidden>
              <?= $this->session->flashdata('error_display') ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ps-0" style="margin-top: 5%;">
        <div class="text-sm-center text-lg-start">
          <h3 class="mt-2"><?= $user['name'] ?></h3>
          <p><?= $user['email'] ?></p>
          <h6><?= $user['no_hp'] ?></h6>
          <div class="d-flex justify-content-sm-center justify-content-lg-start pt-2">
            <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#edit" style="width: 80px;">EDIT</button>
            <a href="<?= base_url() ?>auth/logout" class="btn btn-danger ms-5" style="width: 100px;">LOGOUT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="editprofile" method="POST">
            <div class="mb-3">
              <label for="fullname" class="col-form-label">Full Name:</label>
              <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['name'] ?>">
              <?= $this->session->flashdata('error_name') ?>
            </div>
            <div class="mb-3">
              <label for="no_hp" class="col-form-label">Phone Number:</label>
              <input class="form-control" id="no_hp" name="no_hp" value="<?= $user['no_hp'] ?>">
              <?= $this->session->flashdata('error_nohp') ?>
            </div>
            <div class=" mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
            </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

  <hr style="margin-top:3%; opacity:0.1;">

  <!-- Riwayat Pemesanan -->
  <div class="container pt-3">
    <h2 class="text-sm-center text-lg-start">Booking History</h2>
    <div class="row ">
      <?php foreach ($history as $hist) : ?>
        <div class="col-lg-3 col-md-6 col-12-sm">
          <div class="d-flex justify-content-center">
            <div class="card mt-3" style="width: 300px; height:250px; border-radius:15px;">
              <div class="d-flex w-100">
                <h6 style="padding-top:5%; padding-left:7%;">Room <?= $hist['room'] ?></h6>
                <?php if ($hist['status'] == 1) { ?>
                  <p style="padding-top: 5%; padding-left:40%" class="text-danger">
                    Unpaid</p>
                <?php } elseif ($hist['status'] == 2) { ?>
                  <p style="padding-top: 5%; padding-left:40%" class="text-success">
                    Paid</p>
                <?php } ?>
              </div>
              <div class="ps-4">
                <h6 style="padding: 5px 1px; border-radius:10px; width:60%; background-color:#008F97" class="text-center text-white"><?= $hist['class'] ?></h6>
              </div>
              <div class="d-flex harga-tanggal ">
                <p style="padding-left: 7%; padding-top:5%;">Price</p>
                <p style="padding-top:5%; padding-left:20%;">Rp <?= number_format($hist['price_booking'], 0, '', '.') ?></p>
              </div>
              <div class="d-flex p-0">
                <p style="padding-left: 7%; padding-top:-5%;">Date</p>
                <p style="padding-top: -5%; padding-left:20%;"><?= date('d M Y', $hist['transaction_created']) ?></p>
              </div>
              <div class="d-flex justify-content-end pe-3">
                <?php if ($hist['status'] == 1) : ?>
                  <form action="payment" method="POST">
                    <input type="hidden" name="price" id="price" value="<?= $hist['price_booking'] ?>">
                    <input type="hidden" name="no_kamar" id="no_kamar" value="<?= $hist['room'] ?>">
                    <button type="submit" class="text-decoration-none text-white btn btn-danger">Pay</button>
                  </form>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>



  <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
  <script>
    let inputFile = document.getElementById('image');
    let submitFoto = document.getElementById('submit-foto');
    inputFile.addEventListener('change', () => {
      document.getElementById('select-file').innerHTML = inputFile.files[0].name;
      submitFoto.submit();
    });
  </script>
  </body>

  </html>