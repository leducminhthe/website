<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


 
<?php 
	/**
	* 
	*/
	class company
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function insert_company($data){

			$company_desc = $data['company_desc'];

			$query = "INSERT INTO table_congty(company_desc) VALUES('$company_desc') ";
			$result = $this->db->insert($query);
			if($result){
				$alert = "<span class='success'>Insert Category Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='error'>Insert Category NOT Success</span>";
				return $alert;
			}
		}

		public function show_company()
		{
			$query = "SELECT * FROM table_congty ";
			$result = $this->db->select($query);
			return $result;
		}

		public function update_company($data)
		{
			$company_desc = $data['company_desc'];

			$query = "UPDATE table_congty SET company_desc = '$company_desc'";
			$result = $this->db->update($query);
			if($result){
				$alert = "<span class='success'>Company Update Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='error'>Update Company NOT Success</span>";
				return $alert;
			}

		}

	}
 ?>