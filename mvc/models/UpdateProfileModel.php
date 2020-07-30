<?php
	class UpdateProfileModel extends DB{

		public function Edit($firstname,$lastname,$email,$address,$phone){
			$id = $_SESSION['user']['Id'];
			$qr = "UPDATE user SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email', Address = '$address', Phone = '$phone' WHERE ID = '$id' ";

			if( mysqli_query($this->con2, $qr)){
				echo "<script>alert('Update success')</script>";
			}else{
				echo "<script>alert('Update false')</script>";
			}
		}

		public function Update(){
			$id = $_SESSION['user']['Id'];
			$sql = "SELECT * FROM user WHERE ID = '$id'";
			$result = mysqli_query($this->con2, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$name = $row['Firstname'] . ' ' . $row['Lastname'];

					$user = array(
                    'Id' =>  $row["ID"],
                    'FirstName' =>$row['Firstname'],
                    'LastName' => $row['Lastname'],
                    'Name' => $name,
                    'Email' => $row["Email"],
                    'Phone' => $row['Phone'],
                    'Address'=> $row['Address']
                    );
                    $_SESSION['user'] = $user;
				}
				echo "<script>window.location= '/website/UpdateProfileController'</script>";
			}else{
				echo "<script>False</script>";
			}
		}
	}	
?>