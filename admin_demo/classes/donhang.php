<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php 
	/**
	* 
	*/
	class donhang
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function show_donhang()
		{
			$query = "SELECT * FROM donhang";
			$result = $this->db->select($query);
			return $result;
		}

		public function del_donhang($email){
			$query = "DELETE FROM donhang where Email = '$email' ";
			$result = $this->db->delete($query);
			if($result){
				echo "<script>alert('Đã giao sản phẩm')</script>";
				echo "<script>window.location= '/website/admin_demo/admin/donhang.php'</script>";
			}else {
				echo "<script>alert('Chưa giao')</script>";
				echo "<script>window.location= '/website/admin_demo/admin/donhang.php'</script>";
			}
		}
	}
 ?>