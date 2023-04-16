<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Menu</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>
<body>
	<center>
		<h1>Data Nasi Goreng Delivery</h1>
		<a href="<?= base_url('menu/tambah') ?>" class="tambah">Tambah Data</a>
		<table Border="1" cellspacing="0">
			<tr align="center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Gambar</td>
				<td>Aksi</td>
			</tr>
			<?php 
			$count = 0;
			foreach ($queryAll as $row) {
				$count = $count + 1;
				?>
				<tr align="center">
					<td><?= $row->kdMenu ?></td>
					<td><?= $row->namaMenu ?></td>
					<td><?= $row->harga ?></td>
					<td>
						<img src="<?= base_url('assets/img/upload/') . $row->gambar; ?>" alt="<?= $row->namaMenu; ?>" class="gambar">
					</td>
					<td><a href="<?= base_url('menu/ubah') ?>/<?= $row->kdMenu ?>" class="ubah">Ubah</a> <a Href="<?= base_url('menu/hapus') ?>/<?= $row->kdMenu ?>" class="hapus">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>