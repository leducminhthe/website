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
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST["phone"];
        }

        $this->view("layout2", [
            "Page"=>"Profile",
            "Edit"=>$UserModel->Edit( $firstname,$lastname,$email,$address,$phone),
            "Update"=>$UserModel->Update(),
        ]);
    }
}
?>