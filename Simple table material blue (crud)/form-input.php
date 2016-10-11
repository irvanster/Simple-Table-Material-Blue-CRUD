<?php include('koneksi.php'); ?>
<form method="post" action="proses.php">
	<table>
		
	<tr>
		<td>NAMA</td><td>:</td><td><input type="text" name="nama" required autofocus></td>
	</tr>
	<tr>
		<td>KEAHLIAN</td><td>:</td><td><input type="text" name="keahlian" required></td>
	</tr>
	<tr>
		<td>ALAMAT</td><td>:</td><td><input type="text" name="alamat" required></td>
	</tr>

	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>


	</table>
</form>