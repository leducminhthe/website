<?php 

	class LogoutController extends Controller{

		function Trangchu(){
		  	session_destroy();
		  	header('location: /website/HomeController.php');
		}
	}

?>