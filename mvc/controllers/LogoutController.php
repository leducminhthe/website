<?php 

	class LogoutController extends Controller{

		function Trangchu(){
		  	session_destroy();
		  	header('location: HomeController.php');
		}
	}

?>