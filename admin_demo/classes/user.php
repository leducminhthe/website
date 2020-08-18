<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


 
<?php 
	/**
	* 
	*/
	class user
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_User($user){
			$Username = $this->fm->validation($user['Username']);
			$Phone = $this->fm->validation($user['Phone']);
			$Email = $this->fm->validation($user['Email']);
			$pwd = $this->fm->validation($user['Password']); //gọi ham validation từ file Format để ktra

			$Username = mysqli_real_escape_string($this->db->link, $user['Username']);
			$Phone = mysqli_real_escape_string($this->db->link, $user['Phone']);
			$Email = mysqli_real_escape_string($this->db->link, $user['Email']);
			$pwd = mysqli_real_escape_string($this->db->link, $user['Password']);
			$Password = password_hash($pwd, PASSWORD_BCRYPT);
			$level = mysqli_real_escape_string($this->db->link, $user['level']);
			 //mysqli gọi 2 biến. (catName and link) biến link -> gọi conect db từ file db

			$query = "INSERT INTO admin(adminName, Phone, adminEmail, adminPass, level) 
			VALUES('$Username', '$Phone', '$Email', '$Password', '$level') ";
			$result = $this->db->insert($query);
			if($result){
				$alert = "<span class='success'>Insert User Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='error'>Insert User NOT Success</span>";
				return $alert;
			}	
		}

		public function show_user(){
			$qr = "SELECT * FROM admin";
			$result = $this->db->insert($qr);
			return $result;
		}

		public function del_user($id)
		{
			$query = "DELETE FROM admin where adminID = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>User Deleted Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>User Deleted Not Success</span>";
				return $alert;
			}
		}

		public function update_user($user,$id)
		{
			$Username = $this->fm->validation($user['Username']);
			$Phone = $this->fm->validation($user['Phone']);
			 //gọi ham validation từ file Format để ktra

			$Username = mysqli_real_escape_string($this->db->link, $user['Username']);
			$Phone = mysqli_real_escape_string($this->db->link, $user['Phone']);
			
			$level = mysqli_real_escape_string($this->db->link, $user['level']);
			 //mysqli gọi 2 biến. (catName and link) biến link -> gọi conect db từ file db
			if (isset($user['check'])) {
				$check = $user['check'];
			}
			if ( $check  == "on" ) {
				$pwd = $this->fm->validation($user['Password']);
				$pwd = mysqli_real_escape_string($this->db->link, $user['Password']);
				$Password = password_hash($pwd, PASSWORD_DEFAULT);

				$query = "UPDATE admin SET 
				adminName = '$Username', 
				Phone = '$Phone', 
				adminPass = '$Password', 
				level = '$level'
				WHERE adminID = '$id'";
			}else{
				$query = "UPDATE admin SET 
				adminName = '$Username', 
				Phone = '$Phone', 
				level = '$level'
				WHERE adminID = '$id'";
			}
			$result = $this->db->update($query);
			if($result){
				$alert = "<span class='success'>Update User Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='error'>Update User NOT Success</span>";
				return $alert;
			}	

		}
		public function getuserbyId($id)
		{
			$query = "SELECT * FROM admin where adminID = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}
	}
 ?>