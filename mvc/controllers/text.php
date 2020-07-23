<?php

class text extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("textModel");

        $menu = $this->model("MenuModel");

        $sotin1trang = 3;

        $danhmuc = $_GET['danhmuc'];

        $spId = $_GET['spId'];

        if( isset($_GET["trang"]) ){
			$trang = $_GET["trang"];
			settype($trang, "int");
		}else{
			$trang = 1;	
		};

        
		$from = ($trang - 1 ) * $sotin1trang;

        //view
        $this->view("textlayout", [
            "Page"=>"text",
            "MenuCha"=>$menu->get_menus(),
            "SP" => $sp->SP($sotin1trang,$from,$danhmuc,$spId),
        ]);
    }
}
?>