<?php  
  include "navbar_login.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>AddOns SKYTHOSTING</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<br>
		<h1 align = "center">Addons Layanan SKYTHosting</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Addons
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Addons</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">SAVE</button>
				</form>

				<?php
				include('koneksi.php');		
				if (isset($_POST['submit'])) {
					
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];	
					$datas = mysqli_query($koneksi, "insert into barang (nama,harga,deskripsi)values('$nama', '$harga', '$deskripsi')") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil disimpan.');window.location='indexaddons.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php  
      include"footer.php";
    ?>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>