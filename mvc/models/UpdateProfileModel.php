<?php
	class UpdateProfileModel extends DB{

		public function Update($firstname,$lastname,$email,$address,$phone){
			$id = $_SESSION['user']['Id'];
			$qr = "UPDATE user SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email', Address = '$address', Phone = '$phone' WHERE ID = '$id' ";

			if( mysqli_query($this->con, $qr)){
				echo "<script>alert('Update success')</script>";
				echo "<script>window.location= '/website/UpdateController'</script>";
			}else{
				echo "<script>alert('Update false')</script>";
			}
		}
	}	
?>