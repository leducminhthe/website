<?php


class MenuController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("MenuModel");

        //view
        $this->view("layout1", [
            "Page"=>"text",
            "Menu"=>$sp->get_menus(),
            "MenuCon"=>$sp->MenuCon()
        ]);
    }
}
?>