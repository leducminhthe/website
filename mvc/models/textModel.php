<?php
	class textModel extends DB{

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

	}
?>