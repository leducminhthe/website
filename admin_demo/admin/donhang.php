<?php 
	include 'inc/header.php';
	include 'inc/sidebar.php';
	include '../classes/donhang.php';  

	$donhang = new donhang(); 

	if (isset($_GET['donhang'])) {
		$email = $_GET['donhang']; // Lấy catid trên host
    	$delDonhang = $donhang -> del_donhang($email);
	}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Đơn hàng khách hàng</h2>
                <div class="block">  
                	<?php 
            			if(isset($delDonhang)){
                		echo $delDonhang;
            		}
         			?>
		            <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Adress</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Message</th>
							<th>TenSP</th>
							<th>MaSP</th>
							<th>SL</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						
						$donhang = $donhang->show_donhang();
						$i = 0;
						
						
							if($donhang){
							
									while ($result = $donhang->fetch_assoc()){
										$i++;
											
											
						 ?>
						<tr class="odd gradeX">
							<td><?php echo $i ?></td>
							<td><?php echo $result['Name'] ?></td>
							<td><?php echo $result['Address'] ?></td>
							<td><?php echo $result['Email'] ?></td>
							<td><?php echo $result['Phone'] ?></td>
							<td><?php echo $result['Message'] ?></td>
							<td><?php echo $result['TenSP'] ?></td>
							<td><?php echo $result['MaSP'] ?></td>
							<td><?php echo $result['SL'] ?></td>
							<td><a href="?donhang=<?php echo $result['Email'] ?>" title="">Hoàn thành</a></td>
						</tr>
						<?php
									
								
							}
						}
						?>
					</tbody>
				</table>
            </div>
        </div>
<?php include 'inc/footer.php';?>