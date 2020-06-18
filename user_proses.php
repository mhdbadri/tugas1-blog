<?php 

include_once "app/Controller.php";
include_once "app/Users.php";

$users = new app\Users();

if ($_POST['simpan']){
	$users->tambah();
	header("location:dashboard.php?halaman=user_tampil");
}


?>