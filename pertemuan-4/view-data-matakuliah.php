<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data Mata Kuliah </title>
</head>
<body>
	<!-- pertemuan 3 -->
<center>
	<table>
		<tr>
			<th colspan="3">
				Tampil Data Mata Kuliah
			</th>
		</tr>
		<tr>
			<td colspan="3">
				<hr>
			</td>
		</tr>
		<tr>
			<td>Kode MTK </td>
			<td>:</td>
			<td>
				<?= $kode; ?>
			</td>
		</tr>
		<tr>
			<td>Nama MTK </td>
			<td>:</td>
			<td>
				<?= $nama; ?>
			</td>
		</tr>
		<tr>
			<td>SKS </td>
			<td>:</td>
			<td>
				<?= $sks; ?>
			</td>
		</tr>
		<td colspan="3" align="center">
			<a href="<?= base_url('matakuliah'); ?>">Kembali</a>
		</td>
	</table>
</center>
</body>
</html>