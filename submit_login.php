<?php  
	require 'cek.php';
  	include "navbar_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <title>AddOns SKYTHOSTING</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
	<title>AddOns Layanan SKYTHosting</title>
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container col-md-6 mt-4">
		<center><h1>Addons Layanan HostinginAja!</h1></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data AddOns <a href="tambah.php" class="btn btn-sm btn-primary float-right">ADD</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>AddOns</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
							$no = 1;
							while($row = mysqli_fetch_assoc($datas)) {
						?>	
					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama'];?></td>
						<td>Rp <?= $row['harga']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
						<td>
							<a href="foto/<?= $row['gambar']; ?>" target="_blank">
							<img src="foto/<?= $row['gambar']; ?>" style="width: 100px;">
							</a>
						</td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
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
</body>
</html>