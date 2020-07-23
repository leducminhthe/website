<?php 

	class SearchModel extends DB{

		public function SP($sotin1trang,$from,$search){

	        $qr = "SELECT * FROM sanpham WHERE TenSP LIKE '%$search%' OR MaSP = '$search' LIMIT $from,$sotin1trang";
	        $rows = mysqli_query($this->con, $qr);
	        return $rows;
		}

		public function trang_SP( $sotin1trang,$search){
			$qr = "SELECT count(MaSP) as tongsotin FROM sanpham WHERE TenSP LIKE '%$search%' OR MaSP = '$search'";
	        $rows = mysqli_query($this->con, $qr);
	        $tongsotin = mysqli_fetch_array($rows);
	        $sotrang = ceil($tongsotin['tongsotin'] / $sotin1trang);
	       
			return $sotrang;
		}
	}

 ?>