<?php 


$kategori = new app\Kategori();
$rows = $kategori->tampil();

?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	
	<div class="isi">

			<h2 align="center">Data Kategori Gadget</h2>
			<br>
			
			<thead>
			<table>
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>Id Kategori</th>
					<th>Nama Kategori</th>
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
					<td><?php echo $row['cat_id']; ?></td>
					<td><?php echo $row['cat_name']; ?></td>
					<td><?php echo $row['cat_text']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="dashboard.php?halaman=kategori_edit&id=<?php echo $row['cat_id']; ?>">Edit</a>
					<a class ="hapus"  href="dashboard.php?halaman=kategori_proses&delete-id=<?php echo $row['cat_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
			
			<br>
			

			<div align="center">
			<a href="dashboard.php?halaman=kategori_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>		

</div>

</body>

</html>