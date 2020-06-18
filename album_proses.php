<?php 

include_once "app/Controller.php";
include_once "app/Album.php";

$album = new app\Album();

if ($_POST['simpan']){
	$album->tambah();
	header("location:dashboard.php?halaman=album_tampil");
}

if ($_POST['edit']){
	$album->update();
	header("location:dashboard.php?halaman=album_tampil");
}


if ($_GET['delete-id']) {
	$album->hapus($_GET['delete-id']);
	header("location:dashboard.php?halaman=album_tampil");
}

?>