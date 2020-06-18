<?php 

$photos = new app\Photos();
$rows = $photos->tampil();

?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">

			<h2 align="center">Data Photos</h2>
			<br>
			
			<thead>
			<table>
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>Id Photo</th>
					<th>Tanggal Photo</th>
					<th>Photo</th>
					<th>Keterangan</th>
					<th>Id Post</th>
					<th>Aksi</th>
					
				</tr> 
				</div>
			</thead>

				<?php 
				$no = 1;
				?>

				<?php foreach ($rows as $row) { ?>
			<tbody>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $row['photo_id']; ?></td>
					<td><?php echo $row['photo_date']; ?></td>
					<td><img src="uploadimages/<?php echo $row['photo_title'] ?>" width="100px" height="100px"></td>
					<td><?php echo $row['photo_text']; ?></td>
					<td><?php echo $row['post_id']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="dashboard.php?halaman=photos_edit&id=<?php echo $row['photo_id']; ?>">Edit</a>
					<a class ="hapus"  href="dashboard.php?halaman=photos_proses&delete-id=<?php echo $row['photo_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
			
			<br>

			<div align="center">
			<a href="dashboard.php?halaman=photos_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
			
</div>



</body>

</html>