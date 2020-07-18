<?php 

	class CheckOrderModel extends DB{

		public function Check(){
			if (isset($_SESSION['user'])) {
				$Email = $_SESSION['user']['Email'];
				$qr = "SELECT * FROM donhang WHERE Email = '$Email'";
	        	$rows = mysqli_query($this->con, $qr);
				return $rows;
			}else{
				echo "<script>alert('Bạn chưa đăng nhập')</script>";
				echo "<script>window.location = '/website/LoginController'</script>";
			}
			
		}
	}

 ?>