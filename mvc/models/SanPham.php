<?php
class SanPham extends DB{
    public function GetSP(){
         $qr = "SELECT * FROM sanpham";
         return mysqli_query($this->con, $qr);
    }
}
?>