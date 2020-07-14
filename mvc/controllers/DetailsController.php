<?php

class DetailsController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("DetailsModel");

        if( isset($_GET["spId"]) ){
            $spId = $_GET["spId"];
        }else{
            echo "false";
        };
       
        //view
        $this->view("layout2", [
            "Page"=>"details",
            "DanhMucCha" => $sp->DanhMucCha($spId),
            "MenuCha" => $sp->MenuCha(),
            "SPDetail"=> $sp->SPDetail($spId),
            "Image" => $sp->Images_SP($spId)
        ]);
    }
}
?>