<?php 
if (isset($_SESSION['user'])) {
?>
<form action="/website/UpdateProfileController/Update" method="post">
<table class="tbluser">
	<thead class="thead_user">
		<tr>
			<th colspan="4"><h3>Tài Khoản</h3></th>
		</tr>
	</thead>
	<tbody class="tbody_user">
		<tr>
			<td>FirstName</td>
			<td>:</td>
			<td><input type="text" name="firstname" value="<?php echo $_SESSION['user']['FirstName'] ?>"></td>					
		</tr>
		<tr>
			<td>LastName</td>
			<td>:</td>
			<td><input type="text" name="lastname" value="<?php echo $_SESSION['user']['LastName'] ?>"></td>					
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $_SESSION['user']['Email'] ?>"></td>					
		</tr>
		<tr>
			<td>Phone</td>
			<td>:</td>
			<td><input type="text" name="phone" value="<?php echo $_SESSION['user']['Phone'] ?>"></td>					
		</tr>
		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text" name="address" value="<?php echo $_SESSION['user']['Address'] ?>"></td>					
		</tr>
	</tbody>
</table>
<center><input type="submit" name="update" value="Update Profile"></center>
</form>
<?php  }?>