<?php

class DetailsController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("DetailsModel");

        $menu = $this->model("MenuModel");

        if( isset($_GET["spId"]) ){
            $spId = $_GET["spId"];
        }else{
            echo "false";
        };
       
        //view
        $this->view("layout2", [
            "Page"=>"details",
            "MenuCha"=>$menu->get_menus(),
            "DanhMucCha" => $sp->DanhMucCha($spId),
            "listMenuCha" => $sp->MenuCha(),
            "SPDetail"=> $sp->SPDetail($spId),
            "Image" => $sp->Images_SP($spId)
        ]);
    }
}
?>