<?php

class sp_lienquan extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("Ajax_model");

        $sotin1trang = $_GET['sotin1trang'];

        $danhmuc = $_GET['danhmuc'];

        $spId = $_GET['spId'];
        
		$from = $_GET['from'];

        //view
        $this->view("textlayout", [
            "Page"=>"text",
            "SP" => $sp->SP($sotin1trang,$from,$danhmuc,$spId),
        ]);
    }
}
?>