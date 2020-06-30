<?php

class UpdateCartController extends Controller{

    function Trangchu(){
       $sp = $this->model("UpdateCartModel");

       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
            $MaSP = $_POST['MaSP'];
        }

        $this->view("layout2", [
            "Page"=>"giohang",
            "Update_Cart"=> $sp->update_Quantity_Cart($quantity,$MaSP)
        ]);
    }
}
?>