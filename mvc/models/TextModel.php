<?php 

	class TextModel extends DB{

		public function getDetail($spId){
			$query = "SELECT sanpham.*, menucon.TenMenuCon

			FROM sanpham INNER JOIN menucon ON sanpham.id_Con_FK = menucon.id

			WHERE sanpham.TenSP LIKE '%$spId%' OR MaSP = '$spId' LIMIT 1 ";

	        $rows = mysqli_query($this->con, $query);
	        return $rows;
		}

		public function MenuCon(){
			$qr = "SELECT * FROM menucon LIMIT 7";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

		public function SP($sotin1trang,$from,$spId){

	        $qr = "SELECT * FROM sanpham WHERE TenSP LIKE '%$spId%' OR MaSP = '$spId' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function trang_SP( $sotin1trang,$spId){
			$qr = "SELECT * FROM sanpham WHERE TenSP LIKE '%$spId%' OR MaSP = '$spId'";
	        $rows = mysqli_query($this->con, $qr);
	        $tongsotin = mysqli_num_rows($rows);
	        $sotrang = ceil($tongsotin / $sotin1trang);
	       
			return $sotrang;
		}
	}

 ?>