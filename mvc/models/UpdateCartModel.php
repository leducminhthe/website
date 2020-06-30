<?php 

	class UpdateCartModel extends DB{
		
		public function update_Quantity_Cart($quantity,$MaSP){
			$query = "UPDATE giohang SET SL = '$quantity' WHERE MaSP='$MaSP'";
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