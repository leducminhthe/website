<?php

class GetSPController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");
        $sotin1trang = 5;

        if( isset($_GET["GetSPController?trang"]) ){
			$trang = $_GET["GetSPController?trang"];
			settype($trang, "int");
		}else{
			$trang = 1;	
		};

        
		$from = ($trang -1 ) * $sotin1trang;

        //view
        $this->view("layout1", [
            "Page"=>"getsp",
            "SP" => $sp->SP($sotin1trang,$from),
            "trang_SP"=>$sp->trang_SP($sotin1trang),
        ]);
    }
}
?>