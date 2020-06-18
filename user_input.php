<html>

	<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet"href="layout/assets/css/style.css">
	</head>

<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="user_proses.php">
	<center>	
	<h2 align="center">Tambah Data Users</h2>
	<center>
	<table>

			<tr>
				<td>Email User</td>
				<td><input type="text" name="user_email" required></td>
			</tr>
			<tr>
				<td>Password User</td>
				<td><input type="password" name="user_password" required></td>
			</tr>
			<tr>
				<td>Nama User</td>
				<td><input type="text" name="user_nama" required></td>
			</tr>
			<tr>
				<td>No HP User</td>
				<td><input type="text" name="user_hp" required></td>
			</tr>
			<tr>
				<td>User Role</td>
				<td><input type="text" name="user_role" required></td>
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