<?php
	class UserModel extends DB{

		public function InsertUser($fname, $lname, $gender, $email, $password, $phone){
			$qr = "INSERT INTO user(Firstname,Lastname,Gender,Email,Password,Phone) 
			VALUES ('$fname', '$lname', '$gender', '$email', '$password', '$phone')";

			$result = false;

			if( mysqli_query($this->con, $qr)){
				$result = true;
			}

			return json_encode( $result );
		}

	}	
?>