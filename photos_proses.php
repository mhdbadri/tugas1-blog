<?php 

include_once "app/Controller.php";
include_once "app/Photos.php";

$photos = new app\Photos();

if ($_POST['simpan']){
	$photos->tambah();
	header("location:dashboard.php?halaman=photos_tampil");
}

if ($_POST['edit']){
	$photos->update();
	header("location:dashboard.php?halaman=photos_tampil");
}


if ($_GET['delete-id']) {
	$photos->hapus($_GET['delete-id']);
	header("location:dashboard.php?halaman=photos_tampil");
}

?>