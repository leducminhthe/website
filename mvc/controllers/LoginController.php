<?php 

  class LoginController extends Controller{

    function Trangchu(){
      $menu = $this->model("MenuModel");
      $this->view("layout2", [
          "Page"=>"Login",
          "MenuCha"=>$menu->get_menus(),
      ]);
    }

    public function Login(){
      $login = $this->model('LoginModel');

      $email = $pwd = '';

      $email = trim($_POST['email']);
      $pwd = trim($_POST['password']);

      $kq = $login->LoginUser($email, $pwd);

      $this->view("layout2", [
          "Page"=>"Home",
      ]);
    }
  }
 ?>