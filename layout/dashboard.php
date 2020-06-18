<!DOCTYPE html>
<html>	
<head>
	<title>Binjai Gadget</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	
</head>
<body>
	<div class="utama">
	
		<!--header-->
		<div>
			<?php include "header.php"; ?>
		</div>
		

		<div class="subheader">
			<ul>
				<marquee title="" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right">Selamat Datang di Binjai Gadget</marquee>
		
			</ul>
		</div>
		<br>

		<!--menu-->
		
		<div class="menu">
			<a href="dashboard.php">Home</a>
			<a href="dashboard.php?halaman=kategori_tampil">Kategori</a>
			<a href="dashboard.php?halaman=post_tampil">Post</a>
			<a href="dashboard.php?halaman=photos_tampil">Photos</a>
			<a href="dashboard.php?halaman=album_tampil">Album</a>
			<a href="dashboard.php?halaman=user_tampil">Users</a>
			<a href="dashboard.php?halaman=logout">Logout</a>
		</div>

		<div class="isimenu">
		
		<?php 
			if (isset($_GET['halaman'])) 
			{
				include $_GET['halaman'] . ".php";
			}else {
				include "dashboard_main.php";
			}
		 ?>
		</div>	

		<!--footer-->
		<div>
			<?php include "footer.php"; ?>
		</div>
		
</div>
</body>
</html> 