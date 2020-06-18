<?php 

namespace app;

class Photos extends Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_photos 
		JOIN tb_post ON tb_photos.post_id = tb_post.post_id";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}

	public function tambah() {  

		$tanggal = $_POST['photo_date'];
		$foto = $_FILES['photo_title']['name'];
		$tmp = $_FILES['photo_title']['tmp_name'];
		$ket = $_POST['photo_ket'];
		$posting = $_POST['post_id'];
		// Rename nama foto
		$fotoupload = date('dmYHis').$foto;
		// Set path folder penyimpanan foto
		$path = "uploadimages/".$fotoupload;
		// Proses upload
		if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload
		// Proses simpan ke Database
		$sql = $this->db->prepare("INSERT INTO tb_photos(photo_date, photo_title, photo_text, post_id) VALUES(:photo_date, :photo_title, :photo_text, :post_id)");
		$sql->bindParam(":photo_date", $tanggal);
		$sql->bindParam(":photo_title", $fotoupload);
		$sql->bindParam(":photo_text", $ket);
		$sql->bindParam(":post_id", $posting);
		$sql->execute(); // 

	 
			if($sql){ // Cek jika proses simpan ke database sukses atau gagal
				// Jika Sukses, Lakukan :
				header("location: index2.php?halaman=photos_tampil"); // Redirect ke halaman index2.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan menyimpan data ke database.";
				echo "<br><a href='photos_input.php'>Kembali Ke Form</a>";
			}
			}else{
				// Jika gambar gagal diupload, Lakukan :
				echo "Maaf, Gambar gagal untuk diupload.";
				echo "<br><a href='photos_input.php'>Kembali Ke Form</a>";
			}
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_photos WHERE photo_id=:photo_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update() {

		$tanggal = $_POST['photo_date'];
		$foto = $_FILES['photo_title']['name'];
		$tmp = $_FILES['photo_title']['tmp_name'];
		$ket = $_POST['photo_ket'];
		$posting = $_POST['post_id'];
		$id = $_POST['photo_id'];
		
		
		if (empty($foto)) {
			$sql = $this->db->prepare("UPDATE tb_photos SET photo_date=:photo_date, photo_text=:photo_text, post_id=:post_id WHERE photo_id=:photo_id");
			$sql->bindParam(":photo_date", $tanggal);
			$sql->bindParam(":photo_text", $ket);
			$sql->bindParam(":post_id", $posting);
			$sql->bindParam(":photo_id", $id);
			$execute=$sql->execute();

			if ($sql) {
				header("location: photos_tampil.php"); 
			}else{
				echo "Maaf, Gambar gagal untuk diupload.";
				echo "<br><a href='photos_input.php'>Kembali Ke Form</a>";
			}
		}else{
			// Rename nama foto
			$fotoupload = date('dmYHis').$foto;
		// Set path folder simpan foto
		$path = "uploadimages/".$fotoupload;

		if (move_uploaded_file($tmp, $path)) {
			$sql = $this->db->prepare("SELECT photo_title FROM tb_photos WHERE photo_id=:photo_id");
			$sql->bindParam(":photo_id", $id);
			$sql->execute();
			$row=$sql->fetch();

			if (is_file("uploadimages/".$row["photo_title"]))
				unlink("uploadimages/".$row["photo_title"]);

			$sql = $this->db->prepare("UPDATE tb_photos SET photo_date=:photo_date, photo_title=:photo_title, photo_text=:photo_text, post_id=:post_id WHERE photo_id=:photo_id");
			$sql->bindParam(":photo_date", $tanggal);
			$sql->bindParam(":photo_title", $fotoupload);
			$sql->bindParam(":photo_text", $ket);
			$sql->bindParam(":post_id", $posting);
			$sql->bindParam(":photo_id", $id);
			$execute=$sql->execute();

			if($sql){ // Cek jika proses simpan ke database sukses atau gagal
				// Jika Sukses, Lakukan :
				header("location: index2.php?halaman=photos_tampil"); // Redirect ke halaman index2.php
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan menyimpan data ke database.";
				echo "<br><a href='photos_edit.php'>Kembali Ke Form</a>";
			}
			}else{
				// Jika gambar gagal diupload, Lakukan :
				echo "Maaf, Gambar gagal untuk diupload.";
				echo "<br><a href='photos_edit.php'>Kembali Ke Form</a>";
			}	
			
		}
	}

	public function hapus($id)
	{
		$sql = "DELETE FROM tb_photos WHERE photo_id=:photo_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>