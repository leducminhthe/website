<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/user.php';  ?>
<?php
    // gọi class category
    $user = new user();     
    if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['delid']; // Lấy catid trên host
        $deluser = $user -> del_user($id); // hàm check delete Name khi submit lên
    }
 ?> 

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách thương hiệu</h2>
                <div class="block">  
                <?php 
                    if(isset($deluser)){
                        echo $deluser;
                    }
                 ?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Id</th>
							<th>Username</th>
							<th>Email</th>
                            <th>Phone</th>
                            <th>Level</th>
                            <th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$show_user = $user -> show_user();
							if($show_user){
								$i = 0;
								while($result = $show_user -> fetch_assoc()){
									$i++;
								
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['adminName'] ?></td>
							<td><?php echo $result['adminEmail'] ?></td>
                            <td><?php echo $result['Phone'] ?></td>
                            <?php if( $result['level'] == 1 ) {?>
                                <td>Admin</td>
                            <?php }else{ ?>
                                <td>User</td>
                            <?php } ?>

							<td><a href="useredit.php?userid=<?php echo $result['adminID']; ?>">Edit</a> || <a onclick = "return confirm('Are you want to delete???')" href="?delid=<?php echo $result['adminID'] ?>">Delete</a></td>
						</tr>
						<?php 
							}
						}
						 ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

