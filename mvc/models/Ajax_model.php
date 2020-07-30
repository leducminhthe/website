<?php
	class Ajax_model extends DB{

		public function SP($sotin1trang,$from,$danhmuc,$spId){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = '$danhmuc' AND id != '$spId' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

		public function getSP($sotin1trang,$from,$danhmuc){
	        $qr = "SELECT * FROM table_product WHERE cat2_id = '$danhmuc' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con2, $qr);
	        return $rows;
		}

	}
?>