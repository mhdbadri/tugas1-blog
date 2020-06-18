<?php

namespace app;

class Login extends Controller {

    public function __construct()
	{
        parent::__construct();
    }
    

        public function login() {

        $user_nama = $_POST['user_nama'];
        $user_password = $_POST['user_password'];

        $stmt = $this->db->prepare("SELECT * FROM tb_users WHERE user_nama=:user_nama");
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!empty($row) AND password_verify($user_password, $row['user_password'])) {

            $_SESSION['login']  = true;
            $_SESSION['user_id']  = $row['user_id'];
            $_SESSION['user_nama']  = $row['user_nama'];
            $_SESSION['user_role'] = $row['user_role'];
        } else {
            $_SESSION['login_error'] = "Login tidak ditemukan!";
        }

        return false;
    }
}
