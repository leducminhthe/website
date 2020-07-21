<?php

class GetSPController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");

        $menu = $this->model("MenuModel");

        $sotin1trang = 5;
        
        $danhmuc = $_GET['danhmuc'];

        if( isset($_GET["trang"]) ){
			$trang = $_GET["trang"];
			settype($trang, "int");
		}else{
			$trang = 1;	
		};

        
		$from = ($trang - 1 ) * $sotin1trang;

        //view
        $this->view("layout2", [
            "Page"=>"danhmuc",
            "MenuCha"=>$menu->get_menus(),
            "SP" => $sp->SP($sotin1trang,$from,$danhmuc),
            "trang_SP"=>$sp->trang_SP($sotin1trang,$danhmuc),
            "DanhMucMenuCon" => $menu->DanhMucMenuCon($danhmuc),
        ]);
    }
}
?>