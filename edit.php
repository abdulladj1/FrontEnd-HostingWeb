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
		<h1 align = "center">AddOns Layanan SKYTHosting</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Addons
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');
				$id = $_GET['id']; 
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);
				?>
				<form enctype="multipart/form-data" action="" method="post" role="form">
					<div class="form-group">
						<label>Addons</label>
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<div class = "form-group"> 
						<label>Foto Sebelumnya</label>
						<br>
						<img src="foto/<?= $row['gambar']; ?>" class="col-3">
						 <input type="hidden" name="gambar_sebelumnya" value="<?= $row['gambar']; ?>" />
					</div>
					<div class = "form-group"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="gambar" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">UPDATE</button>
				</form>

				<?php
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];
					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['gambar_sebelumnya'];
			          }
			      
			        $foto = $nama_unik1;
					mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi', gambar='$foto' where id ='$id'") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil diupdate.');window.location='submit_login.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br>
	<?php  
      include"footer.php";
    ?>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>