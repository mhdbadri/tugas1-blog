<?php 


$id = $_GET['id'];

$kategori = new app\Kategori();
$row = $kategori->edit($id);

?>


<html>
<link rel="stylesheet"href="layout/assets/css/style.css">
<head>
	<title>Binjai Gadget</title>
</head>
<body>
	<div class="utama">

	<div class="isi">
		<h2 align="center">Edit Data Kategori</h2>
		<br>

		<form action="kategori_proses.php" method="POST">
		<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
		<table>
			
			<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
		    </tr>

		    <tr>
			<td>Keterangan</td>
			<td><input type="textarea" name="cat_ket" required=""  value="<?php echo $row['cat_text']; ?>"></td>
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