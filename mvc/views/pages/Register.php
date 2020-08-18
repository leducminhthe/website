
<form class="form-horizontal" action="./RegisterController/Dangky" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" minlength="3" class="form-control" id="firstname" placeholder="Enter Firstname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" minlength="3" class="form-control" id="lastname" placeholder="Enter Lastname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" checked value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" minlength="3" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" minlength="3" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">PhoneNumber:</label>
    <div class="col-sm-6"> 
      <input type="text" name="phonenumber" class="form-control" id="phone" placeholder="Enter phonenumber" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Address:</label>
    <div class="col-sm-6"> 
      <input type="text" name="address" minlength="3" class="form-control" id="address" placeholder="Enter address" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

