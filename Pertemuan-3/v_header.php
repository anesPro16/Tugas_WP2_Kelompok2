<!DOCTYPE html>
<html>
<head>
	<title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
	<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylebuku.css"> -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
<!-- pertemuan 4 -->
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h3>Membuat Template Sederhana dengan Codeigniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?= base_url().'index.php/web'; ?>">Home</a></li>
					<li><a href="<?= base_url().'index.php/web/about'; ?>">About</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
	</body>
</html>
