  <!-- Profile -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-center pe-sm-5 pe-lg-0">
          <img src="<?= base_url() ?>/assets/img/Profile.png" alt="Profile" class="profile-display">
        </div>
      </div>
      <div class="col-lg-6 mt-5 ps-0">
        <div class="text-sm-center text-lg-start">
          <h3 class="mt-2">Andri Wifaldy Hasibuan</h3>
          <h6>082162409443</h6>
          <p>andriwifaldy@gmail.com</p>
          <div class="d-flex justify-content-sm-center justify-content-lg-start">
            <a href="" class="btn btn-success ms-2" style="width: 80px;">EDIT</a>
            <a href="<?= base_url() ?>auth/logout" class="btn btn-danger ms-5" style="width: 100px;">LOGOUT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr style="margin-top:3%; opacity:0.1;">

  <!-- Riwayat Pemesanan -->
  <div class="container pt-3">
    <h2 class="text-sm-center text-lg-start">Booking History</h2>
    <div class="row ">
      <div class="col-lg-3 col-md-6 col-12-sm">
        <div class="d-flex justify-content-center">
          <div class="card mt-3" style="width: 300px; height:250px; border-radius:15px;">
            <div class="d-flex w-100">
              <h6 style="padding-top:5%; padding-left:7%;">Room 1</h6>
              <p style="padding-top: 5%; padding-left:40%" class="text-danger">Canceled</p>
            </div>
            <div class="ps-4">
              <h6 style="padding: 5px 1px; width:50%; border-radius:10px; background-color:#008F97" class="text-center text-white">Deluxe</h6>
            </div>
            <div class="d-flex harga-tanggal ">
              <p style="padding-left: 7%; padding-top:5%;">Price</p>
              <p style="padding-top:5%; padding-left:20%;">Rp.300.000</p>
            </div>
            <div class="d-flex p-0">
              <p style="padding-left: 7%; padding-top:-5%;">Date</p>
              <p style="padding-top: -5%; padding-left:20%;">4 March 2026</p>
            </div>
            <div class="d-flex justify-content-end ">
              <div class="me-2">
                <a href="" class="trash">
                  <i class="bi bi-trash text-danger" style="font-size: 42px;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
  </body>

  </html>