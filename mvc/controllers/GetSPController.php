<?php

class GetSPController extends Controller{

    function Trangchu(){
        //model

        $menu = $this->model("MenuModel");
        
        if (isset($_GET['menucon'])) {
            $menucon = $_GET['menucon'];
        }

        //view
        $this->view("layout2", [
            "Page"=>"DanhMucCon",
            "Menu"=>$menu->get_menus(),
            "DanhMucCha"=>$menu->DanhMucCha($menucon),
            "DanhMucMenuCon" => $menu->DanhMucMenuCon($menucon),
            "ListMenuCha"=>$menu->ListMenuCha(),
        ]);
    }
}
?>