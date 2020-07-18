<?php
	class SP_BanChayModel extends DB{

		public function SP($sotin1trang,$from){
	        $qr = "SELECT * FROM sanpham WHERE SP_Best > 0 LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con, $qr);
	         // $mang = array();
			// while($row = mysqli_fetch_array($rows)){
	  //   		$mang = $row;
			// }
			// return json_encode($rows);
	        return $rows;
		}

		public function DanhMucMenuCon(){
			$qr = "SELECT * FROM menucon WHERE id = '$danhmuc' ";
	        $rows = mysqli_query($this->con, $qr);
	       
			return $rows;
		}

		public function trang_SP( $sotin1trang){
			$qr = "SELECT count(MaSP) as tongsp FROM sanpham  WHERE SP_Best > 0";
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
	}
?>