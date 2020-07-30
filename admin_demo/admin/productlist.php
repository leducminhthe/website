<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php require_once '../helpers/format.php'; ?>
<?php 
	$pd = new product();
	$fm = new Format();
	if(!isset($_GET['productid']) || $_GET['productid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['productid']; // Lấy catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }
 ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Tất cả sản phẩm </h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>MaSP</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Image</th>
					<th>Danh mục</th>
					<th>Thương hiệu</th>
					<th>Loại</th>
					<th>Xử lý</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				
				$pdlist = $pd->show_product();
				$i = 0;
				
				
					if($pdlist){
					
							while ($result = $pdlist->fetch_assoc()){
								$i++;
									
									
				 ?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
					<td><?php echo $result['masp'] ?></td>
					<td><?php echo $fm->textShorten($result['ten'], 50) ?></td>
					<td><?php echo $result['giatext'] ?></td>
					<td><img src="<?php echo $result['photo'] ?>" width="80"></td>
					<td><?php echo $result['tenmenucha'] ?></td>
					<td><?php echo $result['tenmenucon'] ?></td>
					
					<td><?php 
						echo $result['online'];
					?></td>
					
					<td><a href="productedit.php?productid=<?php echo $result['masp'] ?>">Edit</a> || <a href="?productid=<?php echo $result['masp'] ?>">Delete</a></td>
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
