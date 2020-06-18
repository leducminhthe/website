<?php


class HomeController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");

        //view
        $this->view("layout1", [
            "Page"=>"Home",
            "SP" => $sp->GetSP()
        ]);
    }
}
?>