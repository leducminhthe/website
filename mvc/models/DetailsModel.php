<?php 

	class DetailsModel extends DB{

		public function getDetail($spId){
			$query = "SELECT sanpham.*, menucon.TenMenuCon

			FROM sanpham INNER JOIN menucon ON sanpham.id_Con_FK = menucon.id

			WHERE sanpham.MaSP = '$spId' ";

	        $rows = mysqli_query($this->con, $query);
	        return $rows;
		}

		public function MenuCon(){
			$qr = "SELECT * FROM menucon LIMIT 7";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

		public function SPDetail($spId){
			$qr = "SELECT * FROM sanpham WHERE MaSP = '$spId'";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

		public function BuySP($quantity, $spId){

			$query = "SELECT * FROM sanpham WHERE MaSP = '$spId' ";
			$rows = mysqli_query($this->con, $query)->fetch_assoc();

			$TenSP = $rows['TenSP'];
			$image = $rows['AnhSP'];
			$price = $rows['GIA_BD'];

			$query_insert = "INSERT INTO giohang(MaSP,TENSP,SL,image,price) VALUES('$spId','$TenSP','$quantity','$image','$price') ";
			$insert_row = mysqli_query($this->con, $query_insert);

			if ($insert_row) {
					echo "tk";
			}else{
					echo 'false';
			}
		}

		public function check_cart(){
			$query = "SELECT * FROM giohang";
			$rows = mysqli_query($this->con, $query);
			return $rows;
		}

	}

 ?>