<?php 

	class RegisterController extends Controller{

		public $UserModel;


		public function __construct(){
			$this->UserModel = $this->model('UserModel');
		}

		public function Trangchu(){
			$menu = $this->model("MenuModel");

        	$this->view("layout2", [
            	"Page"=>"Register",
            	"Menu"=>$menu->get_menus(),
        	]);
   		}

   		public function DangKy(){

			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$pwd = $_POST['password'];
			$password = password_hash($pwd, PASSWORD_BCRYPT);
			$phone = $_POST["phonenumber"];

			$kq = $this->UserModel->InsertUser($fname,$lname,$gender,$email,$address,$password,$phone);
   			
			$this->view("layout2", [
            	"Page"=>"Login"
        	]);
   		}
	}

 ?>