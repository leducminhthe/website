<?php 

	class LoginModel extends DB{

		public function LoginUser ($email, $pwd){
			$sql = "SELECT * FROM user WHERE Email='$email'";
			$result = mysqli_query($this->con2, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				$row = $result->fetch_array();
				if(password_verify($pwd, $row['Password'])){
					$id = $row["ID"];
					$email = $row["Email"];
					$name = $row['Firstname'] . ' ' . $row['Lastname'];

					$user = array(
	                'Id' =>  $row["ID"],
	                'FirstName' =>$row['Firstname'],
	                'LastName' => $row['Lastname'],
	                'Name' => $name,
	                'Email' => $email,
	                'Phone' => $row['Phone'],
	                'Address'=> $row['Address']
	                );
	                $_SESSION['user'] = $user;
					echo "<script>window.location= '/website/HomeController'</script>";
				}else{
					echo "<script>alert('Đăng nhập thất bại')</script>";
					echo "<script>window.location= '/website/LoginController'</script>";
				}
			}else{
				echo "<script>alert('Đăng nhập thất bại')</script>";
				echo "<script>window.location= '/website/LoginController'</script>";
			}
		}
	}

 ?>