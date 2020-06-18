<?php

namespace app;

class Users extends Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_users";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	// public function tambah()
	// {
	// 	$email = $_POST['user_email'];
	// 	$password = $_POST['user_password'];
	// 	$nama = $_POST['user_nama'];
	// 	$hp = $_POST['user_hp'];
	// 	$role = $_POST['user_role'];

	// 	$sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_hp, user_role) VALUES
	// 		(:user_email, :user_password, :user_nama, :user_hp, :user_role)";
	// 	$stmt = $this->db->prepare($sql);
	// 	$stmt->bindParam(":user_email", $email);
	// 	$stmt->bindParam(":user_password", $password);
	// 	$stmt->bindParam(":user_nama", $nama);
	// 	$stmt->bindParam(":user_hp", $hp);
	// 	$stmt->bindParam(":user_role", $role);
	// 	$stmt->execute();

	// 	return false;
	// }
	public function tambah()
	{	
		$user_email = $_POST['user_email'];
		$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
		$user_nama = $_POST['user_nama'];
		$user_hp = $_POST['user_hp'];
		$user_role = $_POST['user_role'];

		if (!empty($user_email) AND !empty($user_password)) {

			$sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_hp, user_role)
			VALUES (:user_email, :user_password, :user_nama, :user_hp, :user_role)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":user_email", $user_email);	
			$stmt->bindParam(":user_password", $user_password);
			$stmt->bindParam(":user_nama", $user_nama);
			$stmt->bindParam(":user_hp", $user_hp);
			$stmt->bindParam(":user_role", $user_role);
			$stmt->execute();
		} 

		return false;
	}


}

?>