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
</head>
  <body>
    <br><br>
      <main>
        <div class="py-5 text-center">
          <a class="logo" href="index.php"><img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="100" height="100"></a>
          <h2>Isian form pembelian paket</h2>
        </div>
        <div class="row">
            <p>
                <?php
                    $userID = $_POST['userID'];
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $address2 = ""; // inisialisasi variabel teks kosong
                    if(isset($_POST['address2'])) { // memeriksa apakah input dengan nama "address2" sudah disubmit atau belum
                        $address2 = $_POST['address2']; // mengisi variabel teks dengan nilai input dari pengguna
                    }
                    // menampilkan teks atau tanda "-" tergantung dari nilai variabel teks
                    if($address2 !== "") {
                        $address2 = $_POST['address2'];
                    } else {
                        $address2 = "-";
                    }
                    $country = $_POST['country'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];
                    $pack = $_POST['pack'];
                    $rentDate = $_POST['rentDate'];
                    $ccnumber = $_POST['ccnumber'];

                    // Fungsi String
                    $hashR = hash('sha256', $ccnumber);

                    $paymentMethod = $_POST['paymentMethod'];
                    if(isset($_POST['paymentDetail'])) {
                          $paymentDetail = "Ya";
                      } else {
                          $paymentDetail = "Tidak";
                      }
                    if(isset($_POST['svinfo'])) {
                          $svinfo = "Ya";
                      } else {
                          $svinfo = "Tidak";
                      }
                    echo "<table align=center width=500 border=1>
                    <tr>
                        <td>ID Pengguna</td>
                        <td>$userID</td>
                    </tr>
                    <tr>
                        <td>Nama Depan</td>
                        <td>$firstName</td>
                    </tr>
                    <tr>
                        <td>Nama Belakang</td>
                        <td>$lastName</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>$username</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <td>Alamat 2</td>
                        <td>$address2</td>
                    </tr>
                    <tr>
                        <td>Negara</td>
                        <td>$country</td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>$state</td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td>$zip</td>
                    </tr>
                    <tr>
                        <td>Paket yang Dipilih</td>
                        <td>$pack</td>
                    </tr>
                    <tr>
                        <td>Tanggal sewa</td>
                        <td>$rentDate</td>
                    </tr>
                    <tr>
                        <td>Berikan detail pembayaran</td>
                        <td>$paymentDetail</td>
                    </tr>
                    <tr>
                        <td>Berikan notifikasi penawaran</td>
                        <td>$svinfo</td>
                    </tr>
                    <tr>
                        <td>Metode pembayaran</td>
                        <td>$paymentMethod</td>
                    </tr>
                    <tr>
                        <td>Nomor kartu</td>
                        <td>$hashR</td>
                    </tr>
                    </table>";
                ?>
            </p>
        </div>
        <?php  
            include"footer.php";
        ?>
    </main><br><br>
  </body>
</html>