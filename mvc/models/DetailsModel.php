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

		public function Images_SP($spId){
			$query = "SELECT * FROM images WHERE MaSP_FK = '$spId'";
			$rows = mysqli_query($this->con, $query);
			return $rows;
		}

	}

 ?>