<?php

class DeleteSPController extends Controller{

    function Trangchu(){
       $sp = $this->model("DeleteSPModel");

        if( isset($_GET["MaSP"]) ){
            $MaSP = $_GET["MaSP"];
        }else{
            echo "false";
        }

        $this->view("layout2", [
            "Page"=>"giohang",
            "DeleteSP"=> $sp->delete_SP($MaSP)
        ]);
    }
}
?>