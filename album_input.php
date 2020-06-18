<?php


$photos = new app\Photos();
$rowPhotos = $photos->tampil();
?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="album_proses.php">
	<center>	
	<h2 align="center">Tambah Data Album</h2>
	<center>
	<table>


			<tr>
				<td>Nama Album</td>
				<td><input type="text" name="album_name"></td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td><textarea name="album_ket" required=""></textarea></td>
			</tr>

			<tr>
			<td>Id Photo</td>
			<td>
				<select name="photo_id">
            		<?php foreach($rowPhotos as $row) { ?>
            			<option value="<?php echo $row['photo_id'] ?>"><?php echo $row['photo_title'] ?></option>
            		<?php } ?>
          		</select>
			</td>
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