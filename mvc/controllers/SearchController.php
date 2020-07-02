<?php

class SearchController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SearchModel");

        if (isset($_POST['submit']) !== '') {
            $spId = $_POST['search'];
        }
       
        //view
        $this->view("layout2", [
            "Page"=>"details",
            "SP" => $sp->getDetail($spId),
            "MenuCon" => $sp->MenuCon(),
            "SPDetail"=> $sp->SPDetail($spId),
        ]);
    }
}
?>