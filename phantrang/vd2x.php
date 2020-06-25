<?php
require "dbCon.php";
$sotin1trang = 3; // khách hàng muốn

if( isset($_GET["trang"]) ){
	$trang = $_GET["trang"];
	settype($trang, "int");
}else{
	$trang = 1;	
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phan Trang 01</title>
</head>

<body>

<div id="noidung">
	<?php
	$from = ($trang -1 ) * $sotin1trang;
	if($from<0) $from=0;
	
    echo $qr = "SELECT * FROM MonAn LIMIT $from, $sotin1trang";
	$ds = mysql_query($qr);
	
	while($monan = mysql_fetch_array($ds)){
	?>
	<h3><?php echo $monan["TenMonAn"] ?></h3>
    <?php } ?>
</div>

<div id="phantrang">
<?php

// 2 dong quan trong nhat nha
$x = mysql_query("SELECT id FROM MonAn");
$tongsotin = mysql_num_rows($x);
$sotrang = ceil($tongsotin / $sotin1trang);
for($t=1; $t<=$sotrang; $t++){
	echo "<a href='vd2x.php?trang=$t'>Trang $t</a> - ";
}
?>
</div>

</body>
</html>