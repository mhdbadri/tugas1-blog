<?php 



$post = new app\Post();
$rows = $post->tampil();

?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	
	<div class="isi">

			<h2 align="center">Data Posting</h2>
			<br>
			
			<thead>
			<table>
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>Id Post</th>
					<th>Id Kategori</th>
					<th>Tanggal Post</th>
					<th>Slug</th>
					<th>Judul</th>
					<th>Keterangan</th>
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
					<td><?php echo $row['post_id']; ?></td>
					<td><?php echo $row['cat_id']; ?></td>
					<td><?php echo $row['post_date']; ?></td>
					<td><?php echo $row['post_slug']; ?></td>
					<td><?php echo $row['post_title']; ?></td>
					<td><?php echo $row['post_text']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="dashboard.php?halaman=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a>
					<a class ="hapus" href="dashboard.php?halaman=post_proses&delete-id=<?php echo $row['post_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 

			<br>			

			<div align="center">
			<a href="dashboard.php?halaman=post_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
		
</div>

</body>

</html>