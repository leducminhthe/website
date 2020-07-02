<?php

class UpdateCartController extends Controller{

    function Trangchu(){
       $sp = $this->model("UpdateCartModel");

       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
            $MaSP = $_POST['MaSP'];
            if ($quantity > 0 && filter_var($quantity, FILTER_VALIDATE_INT)) {
                // $_SESSION['SL'] = $quantity;
            }
        }

        $this->view("layout2", [
            "Page"=>"giohang",
        ]);
    }
}
?>