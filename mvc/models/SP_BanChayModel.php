<?php
	class SP_BanChayModel extends DB{

		public function SP($sotin1trang,$from){
	        $qr = "SELECT * FROM table_product WHERE SP_Best > 0 LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con2, $qr);
	         // $mang = array();
			// while($row = mysqli_fetch_array($rows)){
	  //   		$mang = $row;
			// }
			// return json_encode($rows);
	        return $rows;
		}

		public function trang_SP( $sotin1trang){
			$qr = "SELECT count(MaSP) as tongsp FROM table_product  WHERE SP_Best > 0";
	        $rows = mysqli_query($this->con2, $qr);
	        $tongsotin = mysqli_fetch_array($rows);
	        $sotrang = ceil($tongsotin['tongsp'] / $sotin1trang);
	       
			return $sotrang;
		}
	}
?>