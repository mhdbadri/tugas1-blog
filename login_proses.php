<?php

// Config
require_once "inc/config.php";

$log = new app\Login();

if (isset($_POST['submit'])) {

	$log->login();
	header("location:index.php?halaman=login");
}