<!DOCTYPE html>
<html>
<head>
	<title>Form Input Matakuliah </title>
</head>
<body>
	<!-- pertemuan 3 -->
<center>
	<?= validation_errors(); ?>
	<form action="<?php echo base_url('matakuliah/cetak'); ?>" method="post">
		<table>
			<tr>
				<th colspan="3">
					Form Input Data Mata Kuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Kode MTK</th>
				<th>:</th>
				<td>
					<input type="text" name="kode" id="kode">
				</td>
			</tr>
			<tr>
				<th>Nama MTK</th>
				<th>:</th>
				<td>
					<input type="text" id="nama" name="nama">
				</td>
			</tr>
			<tr>
				<th>SKS </th>
				<th>:</th>
				<td>
					<select name="sks" id="sks">
						<option value="">Pilih SKS </option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>