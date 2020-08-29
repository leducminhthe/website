<?php 

	class CompanyModel extends DB{

		public function Check(){
			$qr = "SELECT * FROM table_congty";
	        $rows = mysqli_query($this->con2, $qr);
			return $rows;	
		}
	}

 ?>