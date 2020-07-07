<?php 

	class MenuModel extends DB{

		public function MenuCha(){
			$qr = "SELECT * FROM menucha";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

		public function MenuCon(){
			$qr = "SELECT * FROM menucon";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

	}

 ?>