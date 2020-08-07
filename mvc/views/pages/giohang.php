<nav class="nav nav_GioHang">
  <a class="nav-link" href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/home.png" alt=""></a>
  <a class="nav-link" href="#">Giỏ Hàng</a>
</nav>

<div class="orderLocation row">
	<h2 class="col-2 col-lg-2 col-md-2">Giỏ Hàng</h2>
	<p class="col-4 col-lg-4 col-md-4">Thời gian lưu của giỏ hàng là  30 ngày. Sản phẩm quá 30 ngày sẽ được tự động xóa khỏi danh sách.</p>
	<div class="col-2 col-lg-2 col-md-2">
		<img src="<?php echo file ?>/images/cart.png" alt="">
		<strong>Step 01</strong>
		<p>Giỏ Hàng</p>
	</div>
	<div class="col-2 col-lg-2 col-md-2">
		<img src="<?php echo file ?>/images/pay.png" alt="">
		<strong>Step 02</strong>
		<p>Đặt hàng thanh toán</p>
	</div>
	<div class="col-2 col-lg-2 col-md-2">
		<img src="<?php echo file ?>/images/order.png" alt="">
		<strong>Step 03</strong>
		<p>Hoàn tất đặt hàng</p>
	</div>
</div>

<?php  
	$subtotal = 0;
	if (isset($_SESSION['cart'])) {
		if (count($_SESSION['cart']) > 0 ) {

		foreach ($_SESSION['cart'] as $row) {
		?>
			
		<table class="tblone">
			<tr class="header_tb">
				<th width="20%">TenSP</th>
				<th width="15%">MaSP</th>
				<th width="15%">Price</th>
				<th width="20%">SL</th>
				<th width="25%">Image</th>
				<th width="5%">Action</th>
			</tr>

			<tr class="body_tb">
				<td><?php echo $row['TENSP'] ?></td>
				<td><?php echo $row['MaSP'] ?></td>
				<td><?php echo number_format($total=  $row['price'] * $row['SL']).'VNĐ' ?></td>
				<td>
					<form action="<?php echo link ?>UpdateCartController/Trangchu" method="post">
						<input type="hidden" name="MaSP" value="<?php echo $row['MaSP'] ?>"/>
						<input style="width: 80px;" type="number" name="quantity" min="1" value="<?php echo $row['SL'] ?>"/>
						<input type="submit" name="submit" value="Update"/>
					</form>
				</td>
				<td class="td_image"><img src="<?php echo $row['AnhSP'] ?>" alt=""></td>
				<td><a href="<?php echo link ?>DeleteSPController?MaSP=<?php echo $row['MaSP'] ?>" >Delete</a></td>
			</tr>
		</table>
	 
		<?php 
			$subtotal += $total;
		}?>

		<button type="">
			<a href="<?php echo link ?>DeleteSPController/deleteAll" title="">Delete All</a>
		</button>

		<table class="sub_total" width="40%">
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

		<div class="shopping row">
			<div class="shopleft col-6 col-md-6 col-lg-6">
				<a href="<?php echo link ?>HomeController"><img src="<?php echo file ?>/images/shop.png" alt="" /></a>
			</div>
			<div class="shopright col-6 col-md-6 col-lg-6">
				<a href="<?php echo link ?>CheckoutController"><img src="<?php echo file ?>/images/check.png" alt="" /></a>
			</div>
		</div>

	<?php 
		}else{
			echo "<h3>Your cart empty ! Please Shopping</h3>";
		}
	}else{

		echo "<h3>Your cart empty ! Please Shopping</h3>";
	} 

