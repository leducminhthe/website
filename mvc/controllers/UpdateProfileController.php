<?php

class UpdateProfileController extends Controller{

    public function Trangchu(){

        $menu = $this->model("MenuModel");

        if (isset($_SESSION['user'])) {
            $this->view("layout2", [
                "Page"=>"Profile",
                "Menu"=>$menu->get_menus(),
            ]);
        } else {
            header('location:'.link.'LoginController');
        }
    }

    public function Update(){

        $UserModel = $this->model('UpdateProfileModel');

        if (isset($_POST['Edit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phone = $_POST["phone"];

            if (isset($_POST['check'])) {
                $check = $_POST['check'];
                $pwd = $_POST['Password'];
            }else{
                $check = "";
                $pwd = "";
            }
        }
        echo $check;

        $this->view("layout2", [
            "Page"=>"Profile",
            "Edit"=>$UserModel->Edit( $firstname,$lastname,$address,$phone,$check,$pwd),
            "Update"=>$UserModel->Update(),
        ]);
    }
}
?>