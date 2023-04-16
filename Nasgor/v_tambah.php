<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>
<body>
	<center>
		<h2>Halaman Tambah Menu</h2>
		<form action="<?= base_url('menu/tambahMenu'); ?>" method="post" enctype="multipart/form-data">
			<h4>Form Tambah Menu</h4>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
			<label for="harga">Harga :</label>
			<input type="number" name="harga" id="harga">
			<label for="gambar">Gambar :</label>
			<input type="file" id="gambar" name="gambar">
			<button type="submit">Tambah Data</button>
			<a href="<?= base_url('menu'); ?>" class="balik">Kembali</a>
		</form>
	</center>
</body>
</html>