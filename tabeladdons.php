<?php  
  include"navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>AddonsHostinginAja</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<body>
	<br><br>
	<div class="container">
		<center><h1>Addons Layanan HostinginAja!</h1></center>
		<?php
require "koneksi.php";
//include_once __DIR__.'/core-php-admin/database/dbconfig.php';
$query = "SELECT * FROM barang";
$query_run = mysqli_query($koneksi, $query);

if (mysqli_num_rows($query_run) >0){ ?>
<div class="container py-5">
	<div class="row">
	<?php foreach ($query_run as $row){ ?>

        <div class="col-4">
			<!-- Card -->
			<div class="card">
				<!-- Card image -->
				<a href="foto/<?= $row['gambar']; ?>" target="_blank">
					<img class = "card-img-top" src="foto/<?= $row['gambar']; ?>";>
				</a>
				<!-- Card content -->
				<div class="card-body">
					<!-- Title -->
  					<h2 class="card-title"><?= $row['nama'];?></h2>
  					<!-- Text -->
  					<p class="card-text"><?= $row['deskripsi']; ?></p>
					<div class="card-footer">
						<h4 class="card-title">Rp<?= $row['harga'];?></h4>
						<a href="form.php"><button type="button" class="btn btn-primary">Beli</button></a>
					</div>
				</div>
			</div>
		<!-- Card -->
 		</div><!-- /col-4 -->
	<?php } ?>     
	</div><!-- /row -->
</div><!-- /container -->
<?php } else {
	echo "No record found";
}
?>
		<div class="text-center">
			<a href="cetakaddons.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>PRINT</a>
			<br>
			<br>
		</div>
	</div>
    <?php  
      include"footer.php";
    ?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>