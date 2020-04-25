<!DOCTYPE html>
<html>
	<head>
		<title>Jawaban UTS</title>
		<style>
		table, th, td {
		border: 1px solid black;
		}
		</style>
	</head>
	<body>
		<form action="" method="GET">
			Nama Wilayah :
			<select name="namaWilayah">
				<option>Nama Wilayah</option>
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select><br>

			Jumlah Positif : <input type="text" name="jmlPositif"><br>
			Jumlah Dirawat : <input type="text" name="jmlDirawat"><br>
			Jumlah Sembuh : <input type="text" name="jmlSembuh"><br>
			Jumlah Meninggal : <input type="text" name="jmlMeninggal"><br>
			Nama Operator : <input type="text" name="nama"><br>
			NIM Mahasiswa : <input type="text" name="nim"><br>
			<input type="submit"></input>
		</form><br><br><br><br>

		<center>
			<h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>

			<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
			Per <?= $dt->format("d-F-y H:i:s"); ?> <br>
			
			<?= $_GET['nama']; ?>
			<?= $_GET['nim']; ?>

			<table>
				<tr>
					<th>Positif</th>
					<th>Dirawat</th>
					<th>Sembuh</th>
					<th>Meninggal</th>
				</tr>
				<tr>
					<th><?= $_GET['jmlPositif']; ?></th>
					<th><?= $_GET['jmlDirawat']; ?></th>
					<th><?= $_GET['jmlSembuh']; ?></th>
					<th><?= $_GET['jmlMeninggal']; ?></th>
				</tr>
			</table>
		</center>
	</body>
</html>