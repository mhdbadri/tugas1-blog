<?php


$kategori = new app\Kategori();
$rowKategori = $kategori->tampil();
?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="post_proses.php">
	<center>	
	<h2 align="center">Tambah Postingan</h2>
	<center>
	<table>

			<tr>
			<td>Kategori</td>
			<td>
				<select name="cat_id">
            		<?php foreach($rowKategori as $row) { ?>
            			<option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
            		<?php } ?>
          		</select>
			</td>
			</tr>

			<tr>
				<td>Tanggal Post</td>
				<td><input type="date" name="post_date"></td>
			</tr>

			<tr>
				<td>Slug</td>
				<td><input type="text" name="post_slug"></td>
			</tr>

			<tr>
				<td>Judul</td>
				<td><input type="text" name="post_title"></td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td><textarea name="post_ket" required=""></textarea></td>
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