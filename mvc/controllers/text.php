<?php

class text extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("textModel");

        $menu = $this->model("MenuModel");

        $sotin1trang = $_GET['sotin1trang'];

        $danhmuc = $_GET['danhmuc'];

        $spId = $_GET['spId'];
        
		$from = $_GET['from'];

        //view
        $this->view("textlayout", [
            "Page"=>"text",
            "MenuCha"=>$menu->get_menus(),
            "SP" => $sp->SP($sotin1trang,$from,$danhmuc,$spId),
        ]);
    }
}
?>