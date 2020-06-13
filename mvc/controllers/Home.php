<?php


class Home extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPham");

        //view
        $this->view("layout1", [
            "Page"=>"Home",
            "SP" => $sp->GetSP()
        ]);
    }
}
?>