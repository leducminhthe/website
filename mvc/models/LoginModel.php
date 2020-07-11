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
					$name = $row['Firstname'] . ' ' . $row['Lastname'];
					$_SESSION['name'] = $name;
					$_SESSION['id'] = $id;
					$_SESSION['email'] = $email;

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
				}
				echo "<script>window.location= '/website/HomeController'</script>";
			}else{
				echo "<script>Đăng nhập thất bại</script>";
			}
		}
	}

 ?>