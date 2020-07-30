<?php
	class UserModel extends DB{

		public function InsertUser($fname, $lname, $gender, $email, $address, $password, $phone){
			$qr = "INSERT INTO user(Firstname,Lastname,Gender,Email,Password,Phone,Address) 
			VALUES ('$fname', '$lname', '$gender', '$email', '$password', '$phone','$address')";

			if( mysqli_query($this->con2, $qr)){
				echo "<script>alert('Đăng ký thành công')</script>";
				echo "<script>window.location= '/website/LoginController'</script>";
			}else{
				echo "<script>alert('Đăng ký thất bại')</script>";
				echo "<script>window.location= '/website/RegisterController'</script>";
			}
		}
	}	
?>