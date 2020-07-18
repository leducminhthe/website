<?php


class MenuController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("MenuModel");

        //view
        $this->view("layout1", [
            "Page"=>"text",
            "MenuCha"=>$sp->get_menus(),
            "MenuCon"=>$sp->MenuCon()
        ]);
    }
}
?>