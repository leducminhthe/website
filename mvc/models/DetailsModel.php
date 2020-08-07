<?php 

	class DetailsModel extends DB{

		public function DanhMucCha($spId){
			$query = "SELECT table_product.*, table_category_1.ten as tenmenucha, table_category_2.ten

			FROM table_product INNER JOIN table_category_1 ON table_product.cat1_id = table_category_1.id

			INNER JOIN table_category_2 ON table_product.cat2_id = table_category_2.id

			WHERE table_product.id = '$spId' ";

	        $rows = mysqli_query($this->con2, $query);
	        return $rows;
		}

		public function SPDetail($spId){
			$qr = "SELECT * FROM table_product WHERE id = '$spId'";
	        $rows = mysqli_query($this->con2, $qr);
			if ( mysqli_num_rows ( $rows ) ) {
        		return $rows;
    		} else {
        		header('location:'.link.'ErrorController');
    		}
		}

		public function Images_SP($spId){
			$query = "SELECT * FROM table_product_image WHERE product_id = '$spId'";
			$rows = mysqli_query($this->con2, $query);
			return $rows;
		}

	}

 ?>