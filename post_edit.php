<?php

$id = $_GET['id'];
$post = new app\Post();
$rows = $post->edit($id);

$kategori = new app\Kategori();
$rowKategori = $kategori->tampil();

?>



<html>
<link rel="stylesheet"href="layout/assets/css/style.css">
<head>
	<title>Binjai Gadget</title>
</head>
<body>
	<div class="utama">

	<div class="isi">
		<h2 align="center">Edit Data POST</h2>
		<br>

		<form action="post_proses.php" method="POST">
		<input type="hidden" name="post_id" value="<?php echo $id; ?>">
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
				<td><input type="date" name="post_date" value="<?php echo $rows['post_date']; ?>"></td>
			</tr>

			<tr>
				<td>Slug</td>
				<td><input type="text" name="post_slug" value="<?php echo $rows['post_slug']; ?>"></td>
			</tr>

			<tr>
				<td>Judul</td>
				<td><input type="text" name="post_title" value="<?php echo $rows['post_title']; ?>"></td>
			</tr>

			<tr>
			<td>Keterangan</td>
			<td><input type="textarea" name="post_ket" required=""  value="<?php echo $rows['post_text']; ?>"></td>
		    </tr>


		<tr>
			
			<td>
				
			</td>
			<td>
				
				<input type="submit" name="edit" value="Update">
				<input type="reset" name="" value="Reset">
			</td>

		</tr>


		 </table>
		</form>



		</div>

<br>

		

</body>
		

</html>