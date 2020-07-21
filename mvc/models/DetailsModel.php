<?php 

	class DetailsModel extends DB{

		public function DanhMucCha($spId){
			$query = "SELECT sanpham.*, menucha.TenMenuCha, menucon.TenMenuCon

			FROM sanpham INNER JOIN menucha ON sanpham.id_Cha_FK = menucha.id

			INNER JOIN menucon ON sanpham.id_Con_FK = menucon.id

			WHERE sanpham.MaSP = '$spId' ";

	        $rows = mysqli_query($this->con, $query);
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