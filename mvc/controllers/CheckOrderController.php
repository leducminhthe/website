<?php

class CheckOrderController extends Controller{

    function Trangchu(){

        $sp = $this->model('CheckOrderModel');

        $this->view("layout2", [
            "Page"=>"CheckOrder",
            "Check"=>$sp->Check(),
        ]);
    }
}
?>