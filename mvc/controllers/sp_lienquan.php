<?php

class sp_lienquan extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("Ajax_model");

        

        if ($_GET['sotin1trang'] || $_GET['danhmuc'] || $_GET['spId'] || $_GET['from']) {
            $sotin1trang = $_GET['sotin1trang'];

            $danhmuc = $_GET['danhmuc'];

            $spId = $_GET['spId'];
        
            $from = $_GET['from'];
        } else {
            header('location:'.link.'ErrorController');
        }

        //view
        $this->view("textlayout", [
            "Page"=>"text",
            "SP" => $sp->SP($sotin1trang,$from,$danhmuc,$spId),
        ]);
    }
}
?>