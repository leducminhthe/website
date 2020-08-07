<?php 

	class SearchModel extends DB{

		public function SP($sotin1trang,$from,$search){

	        $qr = "SELECT * FROM table_product WHERE ten LIKE '%$search%' OR masp = '$search' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con2, $qr);
	        if ( mysqli_num_rows ( $rows ) ) {
        		return $rows;
    		} else {
        		header('location:'.link.'ErrorController');
    		}
		}

		public function trang_SP( $sotin1trang,$search){
			$qr = "SELECT count(masp) as tongsotin FROM table_product WHERE ten LIKE '%$search%' OR masp = '$search'";
	        $rows = mysqli_query($this->con2, $qr);
	        $tongsotin = mysqli_fetch_array($rows);
	        $sotrang = ceil($tongsotin['tongsotin'] / $sotin1trang);
	       
			return $sotrang;
		}
	}

 ?>