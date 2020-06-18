<?php 

// Kalau login error tampilkan notifikasi
if (isset($_SESSION['login_error'])) {
  echo '<p style="color:white" align="center">Login tidak ditemukan!</p>';
  unset($_SESSION['login_error']);
}

// Kalau sesi user_email ada, redirect
if (isset($_SESSION['user_nama'])) {  
  header("location:dashboard.php"); 
}
?>


<html>
  <head>
    <title> Login form </title>
    <link rel="stylesheet"href="layout/assets/css/style1.css">
  

  </head>
  <body>
  <div class="formlogin">
    
    <h2>Silahkan Login</h2>
    <img src="layout/assets/images/avatar.png" class="user">
    <form action="login_proses.php" method="POST">
      <p>Username</p>
      <input type="text" name = "user_nama" placeholder="Masukkan Nama">
     
      <p>Password</p>
      <input type="password" name = "user_password" placeholder="Masukkan Password">

      <input type="submit" name = "submit" value="Login">
      <input type="reset" name = "" value="Reset">
     
      
    </form>
  </div>
  </body>
</html>
</html>

