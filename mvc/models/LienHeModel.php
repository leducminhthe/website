<?php 
	class LienHeModel extends DB{

		public function InsertLienHe($Hoten, $email, $Phone, $message){
			$qr = "INSERT INTO lienhe(HoTen,email,Phone,Message) 
			VALUES ('$Hoten', '$email', '$Phone', '$message')";

			$result = false;

			if( mysqli_query($this->con, $qr)){
				$result = true;
			}

			return json_encode( $result );
		}
	}
 ?>