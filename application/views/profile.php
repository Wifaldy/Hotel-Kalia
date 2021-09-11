  <!-- Profile -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-center pe-sm-5 pe-lg-0">
          <div class="profile-wrapper bg-black text-center">
            <img src="<?= base_url() ?>/assets/img/Profile.png" alt="Profile" class="profile-display">
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5 ps-0">
        <div class="text-sm-center text-lg-start">
          <h3 class="mt-2">Andri Wifaldy Hasibuan</h3>
          <p>andriwifaldy@gmail.com</p>
          <h6>082162409443</h6>
          <div class="d-flex justify-content-sm-center justify-content-lg-start">
            <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 80px;">EDIT</button>
            <a href="<?= base_url() ?>auth/logout" class="btn btn-danger ms-5" style="width: 100px;">LOGOUT</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="fullname" class="col-form-label">Full Name:</label>
              <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="mb-3">
              <label for="no_hp" class="col-form-label">Phone Number:</label>
              <input class="form-control" id="no_hp" name="no_hp">
            </div>
            <div class="mb-3">
              <label for="email" class="col-form-label">Email:</label>
              <input class="form-control" id="email" name="email" disabled>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
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
              <h6 style="padding: 5px 1px; border-radius:10px; width:60%; background-color:#008F97" class="text-center text-white">Suite</h6>
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