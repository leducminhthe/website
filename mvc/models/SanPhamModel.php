<?php
	class SanPhamModel extends DB{

		public function SP($sotin1trang,$from){

	        $qr = "SELECT * FROM sanpham LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con, $qr);
	         // $mang = array();
			// while($row = mysqli_fetch_array($rows)){
	  //   		$mang = $row;
			// }
			// return json_encode($rows);
	        return $rows;
		}
		public function trang_SP( $sotin1trang){
			$qr = "SELECT * FROM sanpham";
	        $rows = mysqli_query($this->con, $qr);
	        $tongsotin = mysqli_num_rows($rows);
	        $sotrang = ceil($tongsotin / $sotin1trang);
	       
			return $sotrang;
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

		public function check_cart(){
			$query = "SELECT * FROM giohang";
			$rows = mysqli_query($this->con, $query);
			return $rows;
		}
	}
?>