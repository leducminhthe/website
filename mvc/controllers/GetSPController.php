<?php

class GetSPController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");

        $menu = $this->model("MenuModel");
        
        $danhmuc = $_GET['danhmuc'];

        //view
        $this->view("layout2", [
            "Page"=>"danhmuc",
            "Menu"=>$menu->get_menus(),
            "DanhMucCha"=>$menu->muc_cha($danhmuc),
            "DanhMucMenuCon" => $menu->DanhMucMenuCon($danhmuc),
            "ListMenuCha"=>$menu->ListMenuCha(),
        ]);
    }
}
?>