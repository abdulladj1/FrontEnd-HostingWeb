<?php  
  include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SKYTHOSTING</title>

    <!-- My Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="navbar-fixed.css" rel="stylesheet">
</head>
  <body>
    <div>
    <header>
        <div class="judul1">
          <div class="judul2">
            <p><h1>Penawaran Unlimited Web Hosting Dengan Fitur Terlengkap!</h1></p>
            <form action="inputanForm.php">
              <div class="button">
                <input type="submit" value="Beli Sekarang!">
              </div>
            </form>
          </div>
        </div>
        <img src="img/1032.jpg" alt="" srcset="">
    </header>
  </div>
    <section>
        <div class="sidebar">
            <li class="widget">
                <h2>User Review</h2>
                <ul>
                    <span><a href="#"><i class="fa fa-star fa-2x checked"></i></a></span>
                    <span><a href="#"><i class="fa fa-star fa-2x checked"></i></a></span>
                    <span><a href="#"><i class="fa fa-star fa-2x checked"></i></a></span>
                    <span><a href="#"><i class="fa fa-star fa-2x checked"></i></a></span>
                    <span><a href="#"><i class="fa fa-star-half-o fa-2x checked"></i></a></span>
                    <span>&nbsp;&nbsp;4.5 / 5.0</span>
                </ul>
            </li><br>
            <li class="widget">
                <h2>Testimonials</h2>
                <ul>
                    <li><i><a>"Memang benar ini adalah web hosting terbaik di Indonesia, saya sudah berlangganan di sini sejak 3 tahun lalu"</a></i></li>
                    <li align="right"><i><a>~ Marissa Arum</a></i></li>
                    <br>
                    <li><i><a>"Benar-benar web hosting yang menakjubkan!"</a></i></li>
                    <li align="right"><i><a>~ Anita Rahma</a></i></li>
                    <br>
                    <li><i><a>"Setelah saya coba di berbagai website, ternyata hanya website ini yang menyediakan hosting paling stabil"</a></i></li>
                    <li align="right"><i><a>~ Adenova Bagas</a></i></li>
                </ul>
            </li>
        </div>
        <div class="sidebyside">
          <img src="img/1033.jpg" alt="" srcset="">
          <div class="descript">
            <p><h2>SKYT Hosting</h2></p>
            <p><h5>SKYT Hosting adalah web penyedia layanan domain & hosting terbaik di Indonesia. Web ini menyediakan berbagai macam pilihan domain yang masih tersedia di Indonesia.</h5></p>
            <p><h5>SKYT Hosting juga mempermudah bagi calon pengguna untuk memilih domain sesuai kebutuhannya dengan menyediakan beragam paket eksklusif yang banyak diminati.</h5></p>
          </div>
        </div>
    </section>

    <div class="judulPaket">
      <p><h1 align="center">Paket Hosting Terpopuler</h1></p>
    </div>
    <div class="paket" id="content">
      <a href="inputanForm.php">
      <div class="card">
        <img src="img/starter pack 2.png" alt="Starter">
        <div class="intro">
          <h1>Beli</h1>
          <!--p align="center"><span>Nikmati layanan hosting untuk pemula dengan Starter Pack mulai dari Rp20.000</span></p-->
        </div>
      </div>
      </a>
      <a href="inputanForm.php">
      <div class="card">
        <img src="img/semipropack.png" alt="SemiPro">
        <div class="intro">
          <h1>Beli</h1>
          <!--p align="center"><span>Nikmati layanan hosting untuk pemula dengan Starter Pack mulai dari Rp20.000</span></p-->
        </div>
      </div>
      </a>
      <a href="inputanForm.php">
      <div class="card">
        <img src="img/profpack.png" alt="Professional">
        <div class="intro">
          <h1>Beli</h1>
          <!--p align="center"><span>Nikmati layanan hosting untuk pemula dengan Starter Pack mulai dari Rp20.000</span></p-->
        </div>
      </div>
      </a>
    </div>

    <br><br><br><br><br>
    <?php  
      include"footer.php";
    ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
