<?php

class SearchController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SearchModel");

        $menu = $this->model("MenuModel");

        if (isset($_GET['search']) !== '') {
            $search = $_GET['search'];
        }

        $sotin1trang = 3;
        
        if( isset($_GET["trang"]) ){
            $trang = (int)$_GET["trang"];
        }else{
            $trang = 1; 
        };

        $from = ($trang - 1 ) * $sotin1trang;
       
        //view
        $this->view("layout2", [
            "Page"=>"getsp",
            "Menu"=>$menu->get_menus(),
            "SP"=>$sp->SP($sotin1trang,$from,$search),
            "trang_SP"=>$sp->trang_SP($sotin1trang,$search),
        ]);
    }
}
?>