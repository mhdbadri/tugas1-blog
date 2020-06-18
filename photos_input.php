<?php

$post = new app\Post();
$rowPost = $post->tampil();
?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="photos_proses.php" enctype="multipart/form-data">
	<center>	
	<h2 align="center">Tambah Data Photos</h2>
	<center>
	<table>

			<tr>
				<td>Tanggal Photo</td>
				<td><input type="date" name="photo_date"></td>
			</tr>

			<tr>
				<td>Photo</td>
				<td><input type="file" name="photo_title"></td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td><textarea name="photo_ket" required=""></textarea></td>
			</tr>

			<tr>
			<td>Id Post</td>
			<td>
				<select name="post_id">
            		<?php foreach($rowPost as $row) { ?>
            			<option value="<?php echo $row['post_id'] ?>"><?php echo $row['post_title'] ?></option>
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