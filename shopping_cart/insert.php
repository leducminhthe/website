<?php 
	session_start();
	include('ListProducts.php');
	$idProduct = $_GET['id'];
	$newProduct = array();
	foreach ($products as $value) {
		$newProduct[$value['id']] = $value;
	}
	
	if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null) {
		$newProduct[$idProduct]['qty'] = 1;
		$_SESSION['cart'][$idProduct] = $newProduct[$idProduct];
	}else{
		if (array_key_exists($idProduct, $_SESSION['cart'])) {
			$_SESSION['cart'][$idProduct]['qty'] += 1;
		}else{
			$newProduct[$idProduct]['qty'] = 1;
			$_SESSION['cart'][$idProduct] = $newProduct[$idProduct];
		}
	}
	header('location: index.php');
 ?>