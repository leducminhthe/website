<?php 

	class LienHeController extends Controller{

		function Trangchu(){
			$menu = $this->model("MenuModel");

      		$this->view("layout2", [
          		"Page"=>"LienHe",
          		"MenuCha"=>$menu->get_menus(),
      		]);
    	}

    	function LienHe(){

    		$LienHe = $this->model('LienHeModel');

   			if (isset($_POST['submit'])) {
   				$HoTen = $_POST['HoTen'];
				$email = $_POST['email'];
				$Phone = $_POST['Phone'];
				$message = $_POST['message'];
   			}
   				$this->phpMailer();

			$kq = $LienHe->InsertLienHe($HoTen, $email, $Phone, $message);

			$this->view("layout2", [
            	"Page"=>"LienHe",
            	"Result" => $kq
        	]);
   		}

   		function phpMailer(){

		    require './phpmailer/PHPMailerAutoload.php';
		    $mail = new PHPMailer;
		    //smtp settings
		    $mail->isSMTP(); // send as HTML
		    $mail->Host = "smtp.gmail.com"; // SMTP servers
		    $mail->SMTPAuth = true; // turn on SMTP authentication    
		    $mail->Username = "theminhle369@gmail.com"; // Your mail
		    $mail->Password = 'Gietmuon1'; // Your password mail
		    $mail->Port = 587; //specify SMTP Port
		    $mail->SMTPSecure = 'tls';
		    $mail->isHTML(true);
                         
		    $mail->setFrom($_POST['email'], $_POST['HoTen']);

		    $mail->addAddress('theminhle369@gmail.com');
		    //$mail->addReplyTo( "theminhle369@gmail.com",$_POST['name']);

		    $mail->Subject= 'send mail';
		    $mail->Body='<h3>Name :'.$_POST['HoTen'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
		    $mail->send();
   		}
	}

 ?>