<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();

?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Registration Login</a>
		</div>
		<?php 
			if (isset($_SESSION['email'])) {

				$email = $_SESSION['email'];

				?>
					<div class="dropdown navbar-right" id="right">
  						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  						<span class="caret"></span></button>
					  	<ul class="dropdown-menu">
					  		<li><a href="account.php">Account</a></li>
					    	<li><a href="logout.php">Logout</a></li>
					  	</ul>
					</div>
				<?php
			}else{
				?>
					<ul class="nav navbar-nav">
						<li><a href="registration.php">Registration</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				<?php
			} 
		?>
		
	</div>
</nav>