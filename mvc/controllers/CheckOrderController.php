<?php

class CheckOrderController extends Controller{

    function Trangchu(){

        $sp = $this->model('CheckOrderModel');

        $menu = $this->model("MenuModel");

        $this->view("layout2", [
            "Page"=>"CheckOrder",
            "MenuCha"=>$menu->get_menus(),
            "Check"=>$sp->Check(),
        ]);
    }
}
?>