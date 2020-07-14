<?php 

	class LogoutController extends Controller{

		function Trangchu(){
		  	unset($_SESSION['user']);
		  	header('location: /website/HomeController.php');
		}
	}

?>