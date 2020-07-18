<?php


class HomeController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");

        $menu = $this->model("MenuModel");

        //view
        $this->view("layout1", [
            "Page"=>"Home",
            "MenuCha"=>$menu->get_menus(),
            "SP_Best" => $sp->SP_Best(),
            "BinhNuoc" => $sp->BinhNuoc(),
            "DungCuNauAn" => $sp->DungCuNauAn(),
            "HangGiaDung" =>$sp->HangGiaDung(),
            "HopBaoQuan" => $sp->HopBaoQuan(),
            "BinhGiuNhiet" => $sp->BinhGiuNhiet(),
            "HopCom" => $sp->HopCom()
        ]);
    }
}
?>