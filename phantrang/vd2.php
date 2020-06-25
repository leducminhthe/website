<?php
	require "dbCon.php";
	$sotin1trang = 5; // khách hàng muốn

	if( isset($_GET["trang"]) ){
		$trang = $_GET["trang"];
		settype($trang, "int");
	}else{
		$trang = 1;	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phan Trang 01</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div id="noidung">

<?php  
	$from = ($trang -1 ) * $sotin1trang;
    $qr = "SELECT * FROM sanpham LIMIT $from, $sotin1trang";
	$ds = mysqli_query($con,$qr);

	while($row = mysqli_fetch_array($ds)){ ?>

    <li class="col-4 col-md-4 col-lg-4">
	    <a href="">
	      <figure>
	        <p class="mainProduct_listImg"><?=$row['AnhSP'] ?></p>
	        <figcaption>
	          <p class="mainProduct_listTit"><?=$row['TenSP']?></p>
	          <p class="mainProduct_listPrice">
	            <span><?=$row['GIA_BD']?></span>₫</p>
	        </figcaption>
	      </figure>
	    </a>
  	</li>

	<?php } ?>

</div>

<div id="phantrang">
	<?php

	// 2 dong quan trong nhat nha
	$x = mysqli_query($con,"SELECT * FROM SanPham");
	$tongsotin = mysqli_num_rows($x);
	$sotrang = ceil($tongsotin / $sotin1trang);
	for($t=1; $t<=$sotrang; $t++){
		echo "<button><a href='vd2.php?trang=$t'>Trang $t</a></button> ";
	}
	?>
</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>