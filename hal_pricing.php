<?php  
  include"navbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Pricing example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    
    <link href="navbar-fixed.css" rel="stylesheet">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pricing</h1>
      <p class="fs-5 text-muted">Berikut adalah paparan harga dari 3 paket hosting kami. Paket hosting terdiri dari paket starter atau pemula, semi-pro atau kelas menengah, dan professional yang memiliki kebutuhan hosting paling kompleks.</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Starter Pack</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rp20.000<small class="text-muted fw-light">/bln</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Public access</li>
              <li>Free permissions</li>
              <li>Email support</li>
              <li>&nbsp;</li>
            </ul>
            <a href="inputanForm.php"><button type="button" class="w-100 btn btn-lg btn-primary">Get started</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Semi-Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rp85.000<small class="text-muted fw-light">/bln</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Private access</li>
              <li>Extra security</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <a href="inputanForm.php"><button type="button" class="w-100 btn btn-lg btn-primary">Get started</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Professional</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rp240.000<small class="text-muted fw-light">/bln</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Max capability features</li>
              <li>Extra security</li>
              <li>Priority phone and email support</li>
              <li>Help center access</li>
            </ul>
            <a href="inputanForm.php"><button type="button" class="w-100 btn btn-lg btn-primary">Get started</button></a>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare features</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Starter</th>
            <th style="width: 22%;">Semi-Pro</th>
            <th style="width: 22%;">Professional</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Contact Service</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra Bandwith</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</div>
    <?php  
      include"footer.php";
    ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
