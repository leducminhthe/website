<?php 

	class LoginModel extends DB{

		public function LoginUser ($email, $pwd){
			$sql = "SELECT * FROM user WHERE Email='$email'";
			$result = mysqli_query($this->con, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					password_verify($pwd, $row['Password']);
					$id = $row["ID"];
					$email = $row["Email"];
					$firstname = $row['Firstname'];
					$lastname = $row['Lastname'];
					$name = $row['Firstname'] . ' ' . $row['Lastname'];
					$_SESSION['name'] = $name;
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $email;
				}

			}else{
				echo "Đăng nhập thất bại";
			}
		}
	}

 ?>