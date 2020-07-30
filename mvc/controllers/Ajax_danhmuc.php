<?php

class Ajax_danhmuc extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("Ajax_model");

        $sotin1trang = $_GET['sotin1trang'];

        $danhmuc = $_GET['danhmuc'];
        
		$from = $_GET['from'];

        //view
        $this->view("textlayout", [
            "Page"=>"text",
            "SP" => $sp->getSP($sotin1trang,$from,$danhmuc),
        ]);
    }
}
?>