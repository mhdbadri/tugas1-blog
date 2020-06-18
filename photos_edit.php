<?php

$id = $_GET['id'];
$photos= new app\Photos();
$rows = $photos->edit($id);

$post = new app\Post();
$rowPost = $post->tampil();

?>

<html>
<link rel="stylesheet"href="layout/assets/css/style.css">
<head>
	<title>Binjai Gadget</title>
</head>
<body>
	<div class="utama">

	<div class="isi">
		<h2 align="center">Edit Data Photos</h2>
		<br>

		<form action="photos_proses.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
		<table>
			
			

		    <tr>
				<td>Tanggal Photo</td> 
				<td><input type="date" name="photo_date" value="<?php echo $rows['photo_date']; ?>"></td>
			</tr>

			<tr>
				<td>Photo</td>
				<td><input type="file" name="photo_title" value="<?php echo $rows['photo_title']; ?>"></td>
			</tr>

			<tr>
                <td></td>       
                <td><img src="uploadimages/<?php echo $rows ['photo_title'] ?>" width="100px" height="100px"></td>

			</tr>
			
			<tr>
			<td>Keterangan</td>
			<td><input type="textarea" name="photo_ket" required=""  value="<?php echo $rows['photo_text']; ?>"></td>
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