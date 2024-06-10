<hmtl>
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
</head>
<body>
    <footer class="footer">
        <div class="left-area">
            <h2>Contact</h2>
            <ul class="box">
                <li>57554, Palur</li>
                <li>Mojolaban, Sukoharjo</li>
                <li>Jawa Tengah, Indonesia</li>
                <li>www.skythosting.com</li>
                <li>087 724 087 713</li>
            </ul>
        </div>
            <ul class="right-area">
                <li class="link-area">
                    <h2>More Info</h2>
  
                    <ul class="box h-box">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </li>
  
                <li>
                    <h2>Q&A</h2>
                    <ul class="box">
                        <li><a href="#">Bagaimana cara daftar hosting?</a></li>
                        <li><a href="#">Bagaimana cara setting domain?</a></li>
                        <li><a href="#">Berapa lama masa tenggang domain?</a></li>
                        <li><a href="#">Bagaimana sistem pembayaran domain?</a></li>
                        <li><a href="#">Apakah ada garansi domain?</a></li>
                        <li><a href="#">Bagaimana jika domain error?</a></li>
                    </ul>
                </li>
                <li>
                    <h2 >Search Item</h2>
                    <form action="" class="form-search">
                        <div class="search-box">
                            <input type="text" name="" id="">
                            <button class="btn" type="submit">Search</button>
                        </div>
                    </form>
                    <div class="socials">
                        <a href="#fb"><i class="fa fa-facebook"></i></a>
                        <a href="#twit"><i class="fa fa-twitter"></i></a>
                        <a href="#drb"><i class="fa fa-dribbble"></i></a>
                        <a href="#yt"><i class="fa fa-youtube"></i></a>
                        <a href="#tmb"><i class="fa fa-tumblr"></i></a>
                    </div>
                </li>
            </ul>
            <div class="footer-bottom" align="center">
                <img src="img/logo.png" alt="">
                <p>All Right reserved by &copy; Abdullah Adji Nugroho 2023</p>
            </div>

            <!--Fungsi Waktu-->
            <?php
            $today = date("l, d F Y - h:i:s A");
            ?> 
            <?=$today?></p>
    </footer>
</body>
</html>