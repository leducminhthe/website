<?php
	class SanPhamModel extends DB{

		public function SP($sotin1trang,$from,$danhmuc){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = '$danhmuc' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con2, $qr);
	         // $mang = array();
			// while($row = mysqli_fetch_array($rows)){
	  //   		$mang = $row;
			// }
			// return json_encode($rows);
	        return $rows;
		}

		public function trang_SP( $sotin1trang,$danhmuc){
			$qr = "SELECT count(masp) as tongsp FROM table_product WHERE cat2_id = '$danhmuc'";
	        $rows = mysqli_query($this->con2, $qr);
	        $tongsotin = mysqli_fetch_array($rows);
	        $sotrang = ceil($tongsotin['tongsp'] / $sotin1trang);
	       
			return $sotrang;
		}

		public function SP_Best(){
	        $qr = "SELECT * FROM table_product WHERE SP_Best > 0 ORDER BY SP_Best ASC";
	        $rows = mysqli_query($this->con2, $qr);
	       
			return $rows;
	    }

	    public function BinhNuoc(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 19 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	       
			return $rows;
	    }

	    public function DungCuNauAn(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 5 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

		public function HangGiaDung(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 32 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

		public function HopBaoQuan(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 1 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

		public function BinhGiuNhiet(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 25 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

		public function HopCom(){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = 20 LIMIT 6";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

	}
?>