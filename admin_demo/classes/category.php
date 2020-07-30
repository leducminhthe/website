<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


 
<?php 
	/**
	* 
	*/
	class category
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_category($catName){
			$catName = $this->fm->validation($catName); //gọi ham validation từ file Format để ktra
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			 //mysqli gọi 2 biến. (catName and link) biến link -> gọi conect db từ file db
			
			if(empty($catName)){
				$alert = "<span class='error'>Category must be not empty</span>";
				return $alert;
			}else{
				$query = "INSERT INTO table_category_1(ten) VALUES('$catName') ";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>Insert Category Successfully</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Insert Category NOT Success</span>";
					return $alert;
				}
			}
		}
		public function show_category()
		{
			$query = "SELECT * FROM table_category_1 order by id asc ";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_category($catName,$id)
		{
			$catName = $this->fm->validation($catName); //gọi ham validation từ file Format để ktra
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			$id = mysqli_real_escape_string($this->db->link, $id);
			if(empty($catName)){
				$alert = "<span class='error'>Category must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE table_category_1 SET ten= '$catName' WHERE id = '$id' ";
				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Category Update Successfully</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Update Category NOT Success</span>";
					return $alert;
				}
			}
		}
		public function del_category($id)
		{
			$query = "DELETE FROM table_category_1 where id = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Category Deleted Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>Category Deleted Not Success</span>";
				return $alert;
			}
		}
		public function getcatbyId($id)
		{
			$query = "SELECT * FROM table_category_1 where id = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}
	}
 ?>