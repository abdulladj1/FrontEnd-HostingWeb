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
		<center><h1>AddOns Layanan SKYTHosting</h1></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data AddOns <a href="tambah.php" class="btn btn-sm btn-primary float-right">ADD</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Addons</th>
							<th>Harga</th>
							<th>Deskripsi</th>
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