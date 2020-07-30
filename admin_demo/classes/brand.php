<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>



<?php 
	/**
	* 
	*/
	class brand
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_brand($brandName, $category){
			$brandName = $this->fm->validation($brandName);
			$category = $this->fm->validation($category); //gọi ham validation để ktra có rỗng hay ko để ktra

			$brandName = mysqli_real_escape_string($this->db->link, $brandName);
			$category = mysqli_real_escape_string($this->db->link, $category);
			 //mysqli gọi 2 biến. (catName and link) biến link -> gọi conect db từ file db
			
			if(empty($brandName) && empty($category)){
				$alert = "<span class='error'>Brand must be not empty</span>";
				return $alert;
			}else{
				$query = "INSERT INTO table_category_2(ten, cat1_id) VALUES('$brandName', '$category') ";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>Insert brand Successfully</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Insert brand NOT Success</span>";
					return $alert;
				}
			}
		}
		public function show_brand()
		{
			$query = "SELECT * FROM table_category_2 order by id asc ";
			$result = $this->db->select($query);
			return $result;
		}

		public function getbrandbyId($id)
		{
			$query = "SELECT * FROM table_category_2 where id = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}

		public function update_brand($brandName,$id,$category)
		{
			$brandName = $this->fm->validation($brandName); //gọi ham validation từ file Format để ktra
			$$category = $this->fm->validation($category);

			$brandName = mysqli_real_escape_string($this->db->link, $brandName);
			$category = mysqli_real_escape_string($this->db->link, $category);
			$id = mysqli_real_escape_string($this->db->link, $id);
			if(empty($brandName)){
				$alert = "<span class='error'>Brand must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE table_category_2 SET ten = '$brandName', cat1_id = '$category' WHERE id = '$id' ";
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Brand Update Successfully</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Update Brand NOT Success</span>";
					return $alert;
				}
			}

		}
		public function del_brand($id)
		{
			$query = "DELETE FROM table_category_2 where id = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Brand Deleted Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>Brand Deleted Not Success</span>";
				return $alert;
			}
		}
		
	}
 ?>