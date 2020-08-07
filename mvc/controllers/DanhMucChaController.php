<?php

class DanhMucChaController extends Controller{

    function Trangchu(){

        $menu = $this->model("MenuModel");

        if (isset($_GET['menucha'])) {
            $menucha = $_GET['menucha'];
        } else {
            $menucha = 1;
        }

        $this->view("layout2", [
            "Page"=>"DanhMucCha",
            "Menu"=>$menu->get_menus(),
            "DanhMucMenuCha"=>$menu->DanhMucMenuCha($menucha),
            "DanhMucCha"=>$menu->MenuCha($menucha),
            "ListMenuCha"=>$menu->ListMenuCha(),
        ]);
    }
}
?>