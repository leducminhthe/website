<?php

class GioHangController extends Controller{

    function Trangchu(){
       $sp = $this->model("GioHangModel");

        $this->view("layout2", [
            "Page"=>"giohang",
            "GetCart"=> $sp->get_prodcut_cart(),
            "Check_Cart"=>$sp->check_cart()
        ]);
    }

    public function BuySP(){

        $sp = $this->model("GioHangModel");

        if( isset($_POST["spId"]) ){
            $spId = $_POST["spId"];
        }else{
            echo "false";
        };

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $quantity = $_POST['quantity'];
        }

        $this->view("layout2", [
            "Page"=>"giohang",
            "BuySP"=> $sp->BuySP($quantity, $spId),
            "GetCart"=> $sp->get_prodcut_cart(),
            "Check_Cart"=>$sp->check_cart()
        ]);
    }
}
?>