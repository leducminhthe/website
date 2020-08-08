<?php

class DetailsController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("DetailsModel");

        $menu = $this->model("MenuModel");

        if( isset($_GET["spId"]) ){
            $spId = $_GET["spId"];
        }
 
        //view
        $this->view("layout2", [
            "Page"=>"details",
            "Menu"=>$menu->get_menus(),
            "DanhMucCha" => $sp->DanhMucCha($spId),
            "DanhMucCon"=> $sp->DanhMucCha($spId),
            "ListMenuCha" =>$menu->ListMenuCha(),
            "SPDetail"=> $sp->SPDetail($spId),
            "Image" => $sp->Images_SP($spId)
        ]);
    }
}
?>