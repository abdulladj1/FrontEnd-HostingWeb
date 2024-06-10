<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SKYTHOSTING</title>

    <!-- My Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed.css" rel="stylesheet">
    <link href="checkout.css" rel="stylesheet">
</head>
  <body>
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <a class="logo" href="index.php"><img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="100" height="100"></a>
          <h2>Pembelian Paket</h2>
        </div><br>

          <div class="col-12">
            <h4 class="mb-3">Identitas Diri & Detail Paket</h4>

            <!--FORM-->
            <form method="post" class="needs-validation" novalidate action="terimaForm.php">
              <div class="col-sm-6">
                <input type="hidden" name="userID" value="001">
              </div>

              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nama depan</label>
                  <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Masukkan nama depan.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Nama belakang</label>
                  <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Masukkan nama belakang.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Masukkan username.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email</span></label>
                  <input type="email" class="form-control" name="email" placeholder="uns@example.com" required>
                  <div class="invalid-feedback">
                    Masukkan email yang valid.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="address" placeholder="Jl. Ir Sutami No.36, Kentingan, Jebres" required>
                  <div class="invalid-feedback">
                    Masukkan alamat.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address2" class="form-label">Alamat 2 <span class="text-muted">(Opsional)</span></label>
                  <input type="text" class="form-control" name="address2" placeholder="Rumah atau kantor">
                </div>
    
                <div class="col-md-5">
                  <label for="country" class="form-label">Negara</label>
                  <select class="form-select" name="country" required>
                    <option value="">Pilih...</option>
                    <option>Indonesia</option>
                    <option>Malaysia</option>
                    <option>Singapura</option>
                  </select>
                  <div class="invalid-feedback">
                    Masukkan negara.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">Provinsi</label>
                  <select class="form-select" name="state" required>
                    <option value="">Pilih...</option>
                    <option>Jawa Tengah</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Timur</option>
                    <option>DKI Jakarta</option>
                    <option>Yogyakarta</option>
                    <option>Bali</option>
                    <option>Papua</option>
                    <option>Kalimantan</option>
                    <option>Sumatera</option>
                    <option>Sulawesi</option>
                    <option>Singapura</option>
                    <option>Kuala Lumpur</option>
                    <option>Sabah</option>
                  </select>
                  <div class="invalid-feedback">
                    Masukkan provinsi.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Kode pos</label>
                  <input type="text" class="form-control" name="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Masukkan kode pos.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="country" class="form-label">Pilih paket</label>
                  <select class="form-select" name="pack" required>
                    <option value="">Pilih...</option>
                    <option>Paket Starter</option>
                    <option>Paket Semi Pro</option>
                    <option>Paket Professional</option>
                  </select>
                  <div class="invalid-feedback">
                    Masukkan pilihan paket.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="rentDate" class="form-label">Tanggal sewa</label>
                  <input type="date" class="form-control" name="rentDate" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Masukkan tanggal sewa.
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="paymentDetail" value="Ya" checked>
                <label class="form-check-label" for="same-address">Berikan detail pembelian pada email</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info" name="svinfo" value="Ya">
                <label class="form-check-label" for="save-info">Berikan notifikasi penawaran menarik lainnya pada email</label>
              </div>
    
              <hr class="my-4">
    
              <h4 class="mb-3">Pembayaran</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="Kartu kredit" checked required>
                  <label class="form-check-label" for="credit">Kartu kredit</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" value="Kartu debit" required>
                  <label class="form-check-label" for="debit">Kartu debit</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="Paypal" required>
                  <label class="form-check-label" for="paypal">Paypal</label>
                </div>
              </div>
    
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Nama pada kartu</label>
                  <input type="text" class="form-control" name="cc-name" placeholder="" required>
                  <small class="text-muted">Nama lengkap pada kartu</small>
                  <div class="invalid-feedback">
                    Masukkan nama pada kartu
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Nomor kartu kredit</label>
                  <input type="text" class="form-control" name="ccnumber" placeholder="" required>
                  <div class="invalid-feedback">
                    Masukkan nomor kartu kredit
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" name="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Masukkan tanggal expiration
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" name="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Masukkan kode keamanan
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="cc-cvv" class="form-label">Bukti Pembayaran</label>
                  <input type="file" class="form-control" name="foto" placeholder="" required>
                  <div class="invalid-feedback">
                    Upload Bukti Pembayaran
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Selesaikan pembayaran</button>
            </form>
          </div>
        </div>
      </main>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2023 SKYT Hosting</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    
          <script src="checkout.js"></script>
  </body>
</html>