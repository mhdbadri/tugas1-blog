<?php 

$users = new app\Users();
$rows = $users->tampil();

?>

<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">	
	<div class="isi">
	
	<br>
	<br>
			<h2 align="center">Tabel Data Users</h2>

			<br>
			<thead>
			<table>
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>ID User</th>
					<th>Email</th>
					<th>Nama</th>
					<th>No Hp</th>
					<th>User Role</th>
					
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
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['user_email']; ?></td>
					<td><?php echo $row['user_nama']; ?></td>
					<td><?php echo $row['user_hp']; ?></td>
					<td><?php echo $row['user_role']; ?></td>
				</tr>
			<tbody>
			<?php } ?>

			</table> 

			<br>
		
			<div align="center">
			<a href="dashboard.php?halaman=user_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
			
</div>
		
</body>