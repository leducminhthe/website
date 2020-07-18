<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email  = $pwd = '';

$email = trim($_POST['email']);
$pwd = trim($_POST['password']);

$sql = "SELECT * FROM user WHERE Email='$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while( $row = mysqli_fetch_assoc($result)){

	password_verify($pwd, $row['Password']);
	$id = $row["ID"];
	$email = $row["Email"];
	session_start();
	$_SESSION['id'] = $id;
	$_SESSION['email'] = $email;

	header("Location: welcome.php");
	};
}
else
{
	echo "Invalid email or password";
}
?>