<?php 
  session_start();
  $_SESSION['message'] = '';

  $mysqli = new mysqli('localhost', 'root', '', 'account');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //two password are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
      
      print_r($_FILES); die;

      $username = $mysqli ->real_escape_string($_POST['username']);
      $email = $mysqli ->real_escape_string($_POST['email']);
      $password = md5($_POST['password']);
      $avatar_patch = $mysqli ->real_escape_string('image/'.$_FILES['avatar']['name']);

      //make sure file type is images
      if (preg_match("!image!", $_FILES['avatar']['type'])) {
        # code...
      }
    }
  }
 ?>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><? $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>