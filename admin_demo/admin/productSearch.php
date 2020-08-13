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
        <div class="search">
        	<form action="" method="get" accept-charset="utf-8">
        		Search: <input type="text" name="txtSearch">
        		<input type="submit" name="btnSearch" value="submit">
        	</form>
        </div>
        <div class="block">  
            <table class="data_table" id="example" style="width: 100%;">
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

					$search = $_GET["txtSearch"];
					$pdlist = $pd->search_product($search);
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
						
						<?php 
							if ($result['online'] == 0) { ?>
								<td>Tạm thời hết hàng</td>
						<?php } else { ?>
							<td>Còn hàng</td>
						<?php } ?>
						
						<td><a href="productedit.php?productid=<?php echo $result['masp'] ?>">Edit</a> || <a href="?productid=<?php echo $result['masp'] ?>">Delete</a></td>
					</tr>
					<?php
								
							
						}
					}
					?>
				</tbody>
			</table>
       </div>
       <div class="phantrang">
		<?php 
			$pagination = $pd->trang_search_SP($search);
			for ($i=1; $i <= $pagination ; $i++) { ?>

				<button><a href='productSearch.php?trang=<?php echo $i ?>&txtSearch=<?php echo $_GET['txtSearch'] ?>'>Trang <?php echo $i ?></a></button>

			<?php } ?>
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
