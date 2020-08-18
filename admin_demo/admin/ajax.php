<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');


		$db = new Database();
		$fm = new Format();
		$id_cat1 = $_GET['id_cat1'];

		$qr = "SELECT * FROM table_category_2 WHERE cat1_id = '$id_cat1'";
		$result = $db->select($qr);

		foreach ($result as $key => $value) {
			echo "<option value='" . $value['id'] . "'>" . $value['ten'] . "</option>";
		}

 ?>