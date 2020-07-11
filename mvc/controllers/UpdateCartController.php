<?php

class UpdateCartController extends Controller{

    function Trangchu(){

       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
            $MaSP = $_POST['MaSP'];
            if ($quantity > 0 && filter_var($quantity, FILTER_VALIDATE_INT)) {
                //& thay đổi giá trị phần tử khi duyệt
                foreach ($_SESSION["cart"] as &$val)
                {
                    if ($val["MaSP"] == $_POST['MaSP']) {
                        $val["SL"] =  $quantity;
                    }
                }
            }
        }

        $this->view("layout2", [
            "Page"=>"giohang",
        ]);
    }
}
?>