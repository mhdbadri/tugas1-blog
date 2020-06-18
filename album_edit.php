<?php


$id = $_GET['id'];
$album= new app\Album();
$rows = $album->edit($id);

$photos = new app\Photos();
$rowPhotos = $photos->tampil();

?>


<html>
<link rel="stylesheet"href="layout/assets/css/style.css">
<head>
	<title>Binjai Gadget</title>
</head>
<body>
	<div class="utama">


	<div class="isi">
		<h2 align="center">Edit Data Album</h2>
		<br>

		<form action="album_proses.php" method="POST">
		<input type="hidden" name="album_id" value="<?php echo $id; ?>">
		<table>
			

			<tr>
				<td>Nama Album</td>
				<td><input type="text" name="album_name" value="<?php echo $rows['album_name']; ?>"></td>
			</tr>

			<tr>
			<td>Keterangan</td>
			<td><input type="textarea" name="album_ket" required="" value="<?php echo $rows['album_text']; ?>"></td>
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
<br>
	

</body>
		
</html>