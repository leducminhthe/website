<?php

class ErrorController extends Controller{

    function Trangchu(){
        //model
        $menu = $this->model("MenuModel");

        //view
        $this->view("layout2", [
            "Page"=>"404",
            "Menu"=>$menu->get_menus(),
        ]);
    }
}
?>