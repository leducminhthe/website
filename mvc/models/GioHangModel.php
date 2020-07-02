<?php 

	class GioHangModel extends DB{
		
		public function BuySP($quantity, $spId){

			$query = "SELECT * FROM sanpham WHERE MaSP = '$spId' ";
			$rows = mysqli_query($this->con, $query)->fetch_assoc();

			$TenSP = $rows['TenSP'];
			$image = $rows['AnhSP'];
			$price = $rows['GIA_BD'];

			// $check = "SELECT * FROM giohang WHERE MaSP = '$spId' ";
			// $Check_Cart = mysqli_query($this->con, $check);
			// if ($Check_Cart) {
			// 	$alert = "<span>Product alredy added</span>";
			// 	return $alert;
			// }else{
				$query_insert = "INSERT INTO giohang(MaSP,TENSP,SL,image,price) VALUES('$spId','$TenSP','$quantity','$image','$price') ";
				$insert_row = mysqli_query($this->con, $query_insert);
				if ($insert_row) {
					header("location: /website/GioHangController");
				}else{
					 echo "<script>Product is alredy exist</script>";
				}
			// }
		}

	}

 ?>