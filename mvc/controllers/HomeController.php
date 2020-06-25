<?php


class HomeController extends Controller{

    function Trangchu(){
        //model
        $sp = $this->model("SanPhamModel");

        //view
        $this->view("layout1", [
            "Page"=>"Home",
            "BinhNuoc" => $sp->BinhNuoc(),
            "DungCuNauAn" => $sp->DungCuNauAn(),
            "HangGiaDung" =>$sp->HangGiaDung(),
            "HopBaoQuan" => $sp->HopBaoQuan(),
            "BinhGiuNhiet" => $sp->BinhGiuNhiet(),
            "HopCom" => $sp->HopCom()
        ]);
    }
}
?>