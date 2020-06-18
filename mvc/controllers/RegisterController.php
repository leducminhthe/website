<?php 

	class RegisterController extends Controller{

		public $UserModel;


		public function __construct(){
			$this->UserModel = $this->model('UserModel');
		}

		public function Trangchu(){

        	$this->view("layout1", [
            	"Page"=>"Register",
        	]);
   		}

   		public function DangKy(){

   			if (isset($_POST['create'])) {
   				$fname = $_POST['firstname'];
				$lname = $_POST['lastname'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$pwd = $_POST['password'];
				$phone = $_POST["phonenumber"];
				$password = password_hash($pwd, PASSWORD_DEFAULT);
   			}
   			

			$kq = $this->UserModel->InsertUser($fname,$lname,$gender,$email,$phone,$password );
			print_r($kq);
   		}
	}

 ?>