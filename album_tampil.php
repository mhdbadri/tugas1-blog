<?php 

$album = new app\Album();
$rows = $album->tampil();

?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">

			<h2 align="center">Data Album</h2>
			<br>
			
			<thead>
			<table>
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>Id Album</th>
					<th>Nama Album</th>
					<th>Keterangan</th>
					<th>Id Photos</th>
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
					<td><?php echo $row['album_id']; ?></td>
					<td><?php echo $row['album_name']; ?></td>
					<td><?php echo $row['album_text']; ?></td>
					<td><?php echo $row['photo_id']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="dashboard.php?halaman=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a>
					<a class ="hapus" href="dashboard.php?halaman=album_proses&delete-id=<?php echo $row['album_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
			
			<br>

			<div align="center">
			<a href="dashboard.php?halaman=album_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
			

</div>

</body>

</html>