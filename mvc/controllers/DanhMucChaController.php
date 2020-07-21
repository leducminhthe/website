<?php

class DanhMucChaController extends Controller{

    function Trangchu(){

        $menu = $this->model("MenuModel");

        $menucha = $_GET['menucha'];

        $this->view("layout2", [
            "Page"=>"MenuCha",
            "MenuCha"=>$menu->get_menus(),
            "DanhMucMenuCha"=>$menu->DanhMucMenuCha($menucha),
            "DanhMucCha"=>$menu->MenuCha($menucha),
            "ListMenuCha"=>$menu->ListMenuCha(),
        ]);
    }
}
?>