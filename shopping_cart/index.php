<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping_cart</title>

	<style>
		ul{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul li{
			float: left;
			width: 400px;
			border: 1px solid #89CA18;
			padding: 5px;
		}
		ul li a{
			text-decoration: none;
		}
		ul li a:hover{
			color: #EB0F0F;
		}
	</style>

</head>
<body>
	<p>
	<?php 
		$total = 0;
		if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
			foreach ($_SESSION['cart'] as  $list) {
				$total += $list['qty'];
			}
		}
	 ?>
		Đang có <a href="viewcart.php"><?php echo $total ?></a> sản phẩm</p>
	<p>Danh sách sản phẩm</p>
	<?php
		include('ListProducts.php');
		echo "<ul>";
		foreach ($products as $listProduct) {
			echo "<li><h3>" . $listProduct['name'] . "</h3>
				 <p>Gía bán:</p>" . number_format($listProduct['price'] , 0) . "</p> 
				 <p><a href='insert.php?id=" . $listProduct['id'] ."'>Mua ngay</a>	
				 </li>";			
		};
		echo "</ul>";		
	 ?>
</body>
</html>