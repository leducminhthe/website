<?php 

	class DeleteSPModel extends DB{
		
		public function delete_SP($MaSP){
			$query = "DELETE FROM giohang WHERE MaSP = '$MaSP'";
			$rows = mysqli_query($this->con, $query);
			if ($rows) {
				header("location: GioHangController");
			}else{
				$alert = "<span>Not success</span>";
				return $alert;
			}
		}

	}

 ?>