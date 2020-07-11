<?php

class TextController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("TextModel");

        if (isset($_POST['submit']) !== '') {
            $spId = $_POST['search'];
        }

        $sotin1trang = 3;
        
        if( isset($_GET["trang"]) ){
            $trang = $_GET["trang"];
            settype($trang, "int");
        }else{
            $trang = 1; 
        };

        $from = ($trang - 1 ) * $sotin1trang;
       
        //view
        $this->view("layout2", [
            "Page"=>"getsp",
            // "Danhmuc" => $sp->getDetail($spId),
            "SP"=>$sp->SP($sotin1trang,$from,$spId),
            // "MenuCon" => $sp->MenuCon(),
            "trang_SP"=>$sp->trang_SP($sotin1trang,$spId),
        ]);
    }
}
?>