<?php
	class SanPhamModel extends DB{

		public function SP($sotin1trang,$from,$danhmuc){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = '$danhmuc' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con, $qr);
	         // $mang = array();
			// while($row = mysqli_fetch_array($rows)){
	  //   		$mang = $row;
			// }
			// return json_encode($rows);
	        return $rows;
		}

		public function trang_SP( $sotin1trang,$danhmuc){
			$qr = "SELECT count(MaSP) as tongsp FROM sanpham WHERE id_Con_FK = '$danhmuc'";
	        $rows = mysqli_query($this->con, $qr);
	        $tongsotin = mysqli_fetch_array($rows);
	        $sotrang = ceil($tongsotin['tongsp'] / $sotin1trang);
	       
			return $sotrang;
		}

		public function SP_Best(){
	        $qr = "SELECT * FROM sanpham WHERE SP_Best > 0 ORDER BY SP_Best ASC";
	        $rows = mysqli_query($this->con, $qr);
	       
			return $rows;
	    }

	    public function BinhNuoc(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 13";
	        $rows = mysqli_query($this->con, $qr);
	       
			return $rows;
	    }

	    public function DungCuNauAn(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 5";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function HangGiaDung(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 32";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function HopBaoQuan(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 1";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function BinhGiuNhiet(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 25";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function HopCom(){
	        $qr = "SELECT * FROM sanpham WHERE id_Con_FK = 20";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

	}
?>