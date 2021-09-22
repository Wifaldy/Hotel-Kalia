<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/view/<?= $style ?>.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body style="background-color: rgb(244,244,244);">

    <div class="container" style="padding-top: 150px;">
        <div class="row justify-content-center">
            <div class="col-lg-7" style="background-color: white; padding-bottom: 30px;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="../../assets/img/LogoKalia.png" alt="" class="logo">
                            <h6>Kalia Hotel Medan</h6>
                            <p class="mt-2">Total Payment</p>
                            <?php if (!isset($night)) : ?>
                                <h2 class="text-danger">IDR <?= number_format((int)$price, 0); ?></h2>
                            <?php else : ?>
                                <h2 class="text-danger">IDR <?= number_format($night * (int)$price['price'], 0); ?></h2>
                            <?php endif; ?>
                        </div>
                        <hr>
                        <div class="d-flex payment-method">
                            <i class="bi bi-credit-card" style="font-size: 35px; padding-left: 6px;"></i>
                            <p style="padding-top: 15px; padding-left: 10px;" id="credit-card">Credit Card</p>
                        </div>
                        <hr>
                        <div class="d-flex payment-method">
                            <i class="bi bi-bank" style="font-size: 35px; padding-left: 6px;"></i>
                            <p style="padding-top: 15px; padding-left: 10px;" id="bank-transfer">Bank Transfer</p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="" class="text-decoration-none btn btn-light">
                                Profile
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-4 pe-4" style="margin-top: 70px;" id="cc-content">
                        <form action="transactioncc" method="POST">
                            <input type="hidden" value="<?= $no_kamar ?>" name="no_kamar" id="no_kamar">
                            <?php if (!isset($night)) : ?>
                                <input type="hidden" name="price" id="price" value="<?= $price ?>">
                            <?php else : ?>
                                <input type="hidden" name="price" id="price" value="<?= (int)$price['price'] * $night ?>">
                            <?php endif; ?>
                            <div class="row">
                                <div class="bordering">
                                    <div class="col-lg-12">
                                        <div class="input-group pt-2">
                                            <span class="input-group-text icon-input ps-3"><i class="bi bi-credit-card" style="font-size: 25px; margin-left: -10px;"></i></span>
                                            <input type="text" class="form-control input-post" placeholder="Credit Card Number" name="cc_number" id="cc_number">
                                        </div>
                                    </div>
                                    <?= $this->session->flashdata('error_cc') ?>
                                    <hr style="margin-left: -13px; margin-right: -13px; opacity: 0.12;">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="input-group">
                                                <span class="input-group-text icon-input ps-3"><i class="bi bi-calendar-event" style="font-size: 25px; margin-left: -10px;"></i></span>
                                                <input type="text" class="form-control input-post" placeholder="Expire MM/YY" name="exp" id="exp">
                                            </div>
                                        </div>
                                        <?= $this->session->flashdata('error_exp') ?>
                                        <div class="col-lg-5">
                                            <div class="input-group ">
                                                <span class="input-group-text icon-input ps-3"><i class="bi bi-shield-lock" style="font-size: 25px; margin-left: -10px;"></i></span>
                                                <input type="text" class="form-control input-post" placeholder="CVV" name="cvv" id="cvv">
                                            </div>
                                        </div>
                                        <?= $this->session->flashdata('error_cvv') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="bordering1">
                                    <div class="col-lg-12 p-0">
                                        <div class="input-group pt-2">
                                            <span class="input-group-text icon-input ps-3"><i class="bi bi-person" style="font-size: 25px; margin-left: -10px;"></i></span>
                                            <input type="text" class="form-control input-post" placeholder="Name On Card" value=<?= $user['name'] ?> disabled>
                                        </div>
                                    </div>
                                    <hr style="margin-left: -13px; margin-right: -13px;">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="input-group">
                                                <span class="input-group-text icon-input ps-3"><i class="bi bi-envelope" style="font-size: 25px; margin-left: -10px;"></i></span>
                                                <input type="text" class="form-control input-post" placeholder="Email" value=<?= $user['email'] ?> disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="input-group ">
                                                <span class="input-group-text icon-input ps-3"><i class="bi bi-phone" style="font-size: 25px; margin-left: -10px;"></i></span>
                                                <input type="text" class="form-control input-post" placeholder="Phone" value=<?= $user['no_hp'] ?> disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 p-0">
                                    <button type="submit" class="btn btn-danger w-100">Pay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 ps-4 pe-4" style="margin-top: 70px;" id="bt-content">
                        <p>
                            Click the get payment code button and note down the code that appears. In order to make payment at the nearest ATM or internet/Mobile Banking (except for BCA Internet Banking)
                        </p>
                        <p>
                            The payment code will expire after a certain period set by your merchant. Your purchase will be cancelled if payment is made after that period.
                        </p>
                        <!-- Mandiri -->
                        <div class="row">
                            <div class="col-lg-7 ps-3">
                                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2016%2F06%2FMandiri_logo.png&f=1&nofb=1" alt="" style="width: 80px; height: 50px;">
                            </div>
                            <div class="col-lg-5 text-end pt-3">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Get Payment Code
                                </button>
                            </div>
                        </div>
                        <!-- BNI -->
                        <div class="row mt-3">
                            <div class="col-lg-7 ps-3">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F3.bp.blogspot.com%2F-e1fOq9uUk8M%2FV15O0WHiIMI%2FAAAAAAAAAJA%2FIpxPlLevxLsjisy2I625Yvz-eNzgc6xfgCKgB%2Fs1600%2FLogo%252BBank%252BBNI%252BPNG.png&f=1&nofb=1" alt="" style="width: 100px; height: 50px;">
                            </div>
                            <div class="col-lg-5 text-end pt-3">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Get Payment Code
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="<?= base_url() ?>assets/img/Purchase.png" alt="" style="width: 400px; height: 300px;">
                    <h3>You have order this room</h3>
                    <p>Submit payment to a Mandiri unit account 082162409443 on behalf of kartika hotel.The order will be automatically confirmed after you make the payment</p>
                    <form action="transactionbt" method="post">
                        <input type="hidden" value="<?= $no_kamar ?>" name="no_kamar" id="no_kamar">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="<?= base_url() ?>assets/img/Purchase.png" alt="" style="width: 400px; height: 300px;">
                    <h3>You have order this room</h3>
                    <p>Submit payment to a Mandiri unit account 082162409443 on behalf of kartika hotel.The order will be automatically confirmed after you make the payment</p>
                    <form action="transactionbt" method="post">
                        <input type="hidden" value="<?= $no_kamar ?>" name="no_kamar" id="no_kamar">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script>
        let creditCard = document.getElementById('credit-card');
        let bankTransfer = document.getElementById('bank-transfer');
        let ccContent = document.getElementById('cc-content');
        let btContent = document.getElementById('bt-content');


        btContent.style.display = 'none';

        creditCard.addEventListener('click', () => {
            ccContent.style.display = 'block';
            btContent.style.display = 'none';
        });
        bankTransfer.addEventListener('click', () => {
            ccContent.style.display = 'none';
            btContent.style.display = 'block';
        });
    </script>
</body>

</html>