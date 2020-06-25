<?php
	require_once "dbCon.php";
$sotin1trang = 4; // khách hàng muốn
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phan Trang 01</title>
</head>

<body>

<div id="noidung">
	<?php
    $qr = "SELECT * FROM SanPham";
	$ds = mysqli_query($con,$qr);
	
	// 2 dong quan trong nhat nha
	$tongsotin = mysqli_num_rows($ds);
	$sotrang = ceil($tongsotin / $sotin1trang);
	
	while($monan = mysqli_fetch_array($ds)){
	?>
	<h3><?php echo $monan["MaSP"] ?></h3>
    <?php } ?>
</div>

<div id="phantrang">
<?php
for($t=1; $t<=$sotrang; $t++){
	echo "Trang $t - ";
}
?>
</div>

</body>
</html>