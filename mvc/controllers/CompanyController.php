<?php

class CompanyController extends Controller{

    function Trangchu(){

        $sp = $this->model('CompanyModel');

        $menu = $this->model("MenuModel");

        $this->view("layout2", [
            "Page"=>"Company",
            "Menu"=>$menu->get_menus(),
            "Check"=>$sp->Check(),
        ]);
    }
}
?>