<?php 

  class LoginController extends Controller{

    function Trangchu(){
      $this->view("layout1", [
          "Page"=>"Login",
      ]);
    }

    public function Login(){
      $login = $this->model('LoginModel');

      $email = $pwd = '';

      $email = trim($_POST['email']);
      $pwd = trim($_POST['password']);

      $kq = $login->LoginUser($email, $pwd);

      $this->view("layout1", [
          "Page"=>"Home",
      ]);
    }
  }
 ?>