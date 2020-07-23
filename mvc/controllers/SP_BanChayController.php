<?php

class SP_BanChayController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SP_BanChayModel");

        $menu = $this->model("MenuModel");

        $sotin1trang = 5;
        
        if( isset($_GET["trang"]) ){
			$trang = $_GET["trang"];
			settype($trang, "int");
		}else{
			$trang = 1;	
		};

		$from = ($trang - 1 ) * $sotin1trang;

        //view
        $this->view("layout2", [
            "Page"=>"SP_BanChay",
            "Menu"=>$menu->get_menus(),
            "SP" => $sp->SP($sotin1trang,$from),
            "trang_SP"=>$sp->trang_SP($sotin1trang),
        ]);
    }
}
?>