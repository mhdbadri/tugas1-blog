<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="kategori_proses.php">
	<center>	
	<h2 align="center">Tambah Data Kategori</h2>
	<center>
	<table>

			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="cat_name" required></td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td><textarea name="cat_ket" required=""></textarea></td>
			</tr> 



			<tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Tambah">
				<input type="reset" name="reset">
			</td>
			</tr>

	</table>
	</center>
	</form>
	</div>

</div>
</center>


</body>