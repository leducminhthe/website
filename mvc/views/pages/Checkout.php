<form action="CheckoutController/thanhtoan" method="post">
	<div class="checkout row justify-content-around">
	

		<div class="donhang col-5 col-lg-5 col-md-5">
			<?php  
				$subtotal = 0;
				if (isset($_SESSION['cart'])) {

					foreach ($_SESSION['cart'] as $row) {
					?>
						
					<table class="tblone">
						<tr class="header_tb">
							<th width="50%">TenSP</th>
							<th width="20%">MaSP</th>
							<th width="20%">Price</th>
							<th width="10%">SL</th>
						</tr>

						<tr class="body_tb">
							<td><?php echo $row['TENSP'] ?></td>
							<td><?php echo $row['MaSP'] ?></td>
							<td><?php echo number_format($total=  $row['price'] * $row['SL']).'Đ' ?></td>
							<td><?php echo $row['SL'] ?></td>				
						</tr>
					</table>
			 
			<?php 
				$subtotal += $total;
			}?>

					<table class="sub_total" width="60%">
						<tr>
							<th>Giá Tiền: </th>
							<td>
								<?php 
									echo number_format($subtotal) ." "."VNĐ";
								?>	
							</td>
						</tr>
						<tr>
							<th>VAT: </th>
							<td>10%</td>
						</tr>
						<tr>
							<th>Tổng Tiền:</th>
							<td>
								<?php 
									$vat = $subtotal * 0.1;
									$grandtotal = $vat + $subtotal;
									echo number_format($grandtotal)." "."VNĐ";
								?>
							</td>
						</tr>
					</table>
					<input type="radio" checked name="pay" value="Thanh toán khi nhận hàng"> Thanh toán khi nhận hàng<br>		
					<input type="radio" name="pay" value="Chuyển khoản ngân hàng"> Chuyển khoản ngân hàng<br>			
					<input type="radio" name="pay" value="VTC pay"> VTC pay<br>	
					<label>Message:</label>
					<div>	
						<textarea class="message_user" name="message"></textarea>
					</div>
					

			<?php 
				} 
			?>
		</div>

		<div class="nguoimua col-5 col-lg-5 col-md-5">
			<?php 
			if (isset($_SESSION['user'])) {
			?>
			<table class="tbluser">
				<thead class="thead_user">
					<tr>
						<th colspan="4"><h3>Tài Khoản</h3></th>
					</tr>
				</thead>
				<tbody class="tbody_user">
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><?php echo $_SESSION['user']['Name'] ?></td>					
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $_SESSION['user']['Email'] ?></td>					
					</tr>
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><?php echo $_SESSION['user']['Phone'] ?></td>					
					</tr>
					<tr>
						<td>Address</td>
						<td>:</td>
						<td><?php echo $_SESSION['user']['Address'] ?></td>					
					</tr>
				</tbody>
			</table>
			<button class="update_profile" type=""><a href="/website/UpdateProfileController" title="">Update Profile</a></button>
			<?php  
			}else{
			?>

				<h3>Thông Tin Thanh Toán</h3>
				<div class="form-group">
			    <label class="control-label" >Name:</label>
			    <div>
			      <input type="text" name="name" class="form-control" id="firstname" placeholder="Enter Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label" for="email">Email:</label>
			    <div>
			      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label" >PhoneNumber:</label>
			    <div> 
			      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phonenumber">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label" >Address:</label>
			    <div> 
			      <input type="text" name="address" class="form-control" id="phone" placeholder="Enter address">
			    </div>
			  </div>

			<?php
			}?>
		</div>

	</div>
	<input type="submit" name="order" value="Order Now">
</form>