<?php 

namespace app;

class Main extends Controller{

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
    
?>