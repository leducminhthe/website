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
            "SP" => $sp->getDetail($spId),
            "MenuCon" => $sp->MenuCon(),
            "SPDetail"=> $sp->SPDetail($spId),
            "Check_Cart"=>$sp->check_cart(),
            "Image" => $sp->Images_SP($spId)
        ]);
    }
}
?>