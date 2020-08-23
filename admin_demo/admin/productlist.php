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

    if (isset($_GET["btnSearch"])) {
    	$search = $_GET["txtSearch"];
    }
 ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Tất cả sản phẩm </h2>
        <div class="search">
        	<form action="productSearch.php" method="get" accept-charset="utf-8">
        		Search: <input type="text" name="txtSearch">
        		<input type="submit" name="btnSearch" value="submit">
        	</form>
        	<?php 
            if(isset($delProduct)){
                echo $delProduct;
            }
         ?>
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
						<td><?php echo number_format($result['gia'],0) . 'VNĐ' ?></td>
						<td><img src="<?php echo $result['photo'] ?>" width="80"></td>
						<td><?php echo $result['tenmenucha'] ?></td>
						<td><?php echo $result['tenmenucon'] ?></td>
						
						<?php 
							if ($result['online'] == 0) { ?>
								<td>Tạm thời hết hàng</td>
						<?php } else { ?>
							<td>Còn hàng</td>
						<?php } ?>
						
						<td><a href="productedit.php?productid=<?php echo $result['id'] ?>">Edit</a> || <a onclick = "return confirm('Are you want to delete???')" href="?productid=<?php echo $result['id'] ?>">Delete</a></td>
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
			$pagination = $pd->trang_SP();
			for ($i=1; $i <= $pagination ; $i++) { ?>

				<button><a href='productlist.php?trang=<?php echo $i ?>'>Trang <?php echo $i ?></a></button>

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
