<?php 	
	session_start();
 ?>
<meta charset="utf-8">
<h3>Thông tin giỏ hàng</h3>
<?php 
	if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		echo "<form action='Update.php' method='POST'>";
		echo "<table border='1' width='600'>";
		echo "<tr>";
		echo "<td>Tên sản phẩm</td>";
		echo "<td>Số lượng</td>";
		echo "<td>Gía</td>";
		echo "<td>Thành tiền</td>";
		echo "<td>Xóa</td>";
		echo "</tr>";

		foreach ($_SESSION['cart'] as $list) {
			echo "<tr>";
			echo "<td>" . $list['name'] . "</td>";
			echo "<td><input type='number' name='qty[".$list['id']."]' value='".$list['qty']."'></td>";
			echo "<td>" . number_format($list['price']) . "</td>";
			echo "<td>" . number_format($list['qty'] * $list['price']) . "</td>";
			echo "<td><a href='Delete.php?id=".$list['id']."'>Xóa</a></td>";
			echo "</tr>";			
		}
		echo "</table>";
		echo "<button><a href='index.php'>Quay lại</a></button>";
		echo "<input type='submit' value='update' name='btnUpdate'>";
		echo "</form>";

	}
?>