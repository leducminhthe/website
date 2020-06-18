<?php
class SanPhamModel extends DB{
    public function GetSP(){
        $qr = "SELECT * FROM sanpham";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
		while($row = mysqli_fetch_array($rows)){
    		$mang = $row;
		}
		return json_encode($mang['MaSP']);
    }
}
?>