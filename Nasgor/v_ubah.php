<!DOCTYPE html>
<html>
<head>
	<title>Halaman Ubah</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>
<body>
	<center>
		<h2>Halaman Ubah Menu</h2>
		<form action="<?= base_url('menu/ubahMenu'); ?>" method="post" enctype="multipart/form-data">
			<h4>Form Ubah Menu</h4>
			<input type="hidden" name="kdMenu" value="<?= $menuDetail->kdMenu; ?>">
			<label for="nama">Nama :</label>
			<input type="text" name="nama" value="<?= $menuDetail->namaMenu; ?>">
			<label for="harga">Harga :</label>
			<input type="number" name="harga" value="<?= $menuDetail->harga; ?>">
			<label for="gambar">Gambar :</label>
			<img src="<?= base_url('assets/img/upload/') . $menuDetail->gambar; ?>" alt="" width=50>
			<input type="file" name="gambar" value="<?= $menuDetail->gambar; ?>">
			<button type="submit">Ubah Data</button>
			<a href="<?= base_url('menu'); ?>" class="balik">Kembali</a>
		</form>
	</center>
</body>
</html>