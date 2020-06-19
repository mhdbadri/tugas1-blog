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
		
		
		<div>
			<?php include "menu.php"; ?>
		
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