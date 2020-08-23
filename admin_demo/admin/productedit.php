
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php
    // gọi class category
    $pd = new product();
    if(!isset($_GET['productid']) || $_GET['productid'] == NULL){
        echo "<script> window.location = 'productlist.php' </script>";
        
    }else {
        $id = $_GET['productid']; // Lấy productid trên host
    } 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $updateProduct = $pd -> update_product($_POST, $id); // hàm check catName khi submit lên
    }
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa sản phẩm</h2>
        <?php 
            if(isset($updateProduct)){
                echo $updateProduct;
            }
         ?>
         <?php 
         $get_product_by_id = $pd->getproductbyId($id);
         if($get_product_by_id){
            while ($result_product = $get_product_by_id->fetch_assoc()) {
            
          ?>   
        <div class="block">

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input name="productName" value="<?php echo $result_product['ten'] ?>" type="text" class="medium" required/>
                    </td>
                </tr>
                  <tr>
                    <td>
                        <label>MaSP</label>
                    </td>
                    <td>
                        <input name="product_MaSP" value="<?php echo $result_product['masp'] ?>" type="text" class="medium" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>SP_Best</label>
                    </td>
                    <td>
                        <input name="product_SPBest" type="text" value="<?php echo $result_product['SP_Best'] ?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select_cat1" name="category">
                            <option>Select Category</option>
                            <?php 
                            $cat = new category();
                            $catlist = $cat->show_category();
                            if($catlist){
                                while ($result = $catlist->fetch_assoc()){
                            
                             ?>
                            <option 
                            <?php 
                            if($result['id'] == $result_product['cat1_id'])
                                { echo 'selected'; }
                             ?>    
                            value=" <?php echo $result['id'] ?> "> <?php echo $result['ten'] ?></option>
                            
                            <?php 
                            }
                             }
                             ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Brand</label>
                    </td>
                    <td>
                        <select id="select_cat2" name="brand">
                            <option>Select Brand</option>
                            <?php 
                            $brand = new brand();
                            $brandlist = $brand->show_brand();
                            if($brandlist){
                                while ($result = $brandlist->fetch_assoc()){
                            
                             ?>
                            <option
                            <?php 
                            if($result['id'] == $result_product['cat2_id'])
                                { echo 'selected'; }
                            ?> 
                            value=" <?php echo $result['id'] ?> "> <?php echo $result['ten'] ?> </option>
                            
                            <?php 
                            }
                             }
                             ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="product_desc" class="tinymce"><?php echo $result_product['chitietsanpham'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="product_infor" class="tinymce"><?php echo $result_product['thongtinsanpham'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input name="price" type="text" value="<?php echo $result_product['gia'] ?>" class="medium" required/>
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $result_product['photo'] ?>" width="100"><br>
                        <input name="image_link" type="text" class="medium" value="<?php echo $result_product['photo']?>" required/>
                    </td>
                    
                </tr>

                <?php $more_img= $pd -> product_image($id);
                    if($more_img){
                    while ($result_img = $more_img->fetch_assoc()) {
                ?> 

                <tr>
                    <td>
                        <label>More Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $result_img['photo'] ?>" width="100"><br>
                        <input name="image_link" type="text" class="medium" value="<?php echo $result_img['photo']?>" required/>
                    </td>
                </tr>

                <?php } }?>

                <tr>
                    <td>
                        <label>Product Active</label>
                    </td>
                    <td>
                        <select id="select" name="active">
                            <option>Select Active</option>
                            <?php 
                            if ($result_product['online'] == '1') {
                             ?>
                            <option selected value="1">Còn hàng</option>
                            <option value="0">Tạm thời hết hàng</option>
                            <?php 
                                }else{
                            ?>
                            <option value="1">Còn hàng</option>
                            <option selected value="0">Tạm thời hết hàng</option>    
                            <?php 
                        }
                             ?>
                             
                        
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php 
            }
            }
             ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
    $('#select_cat1').change(function(){
        var id_cat1 = $(this).val();
        $.ajax({
        type: "GET",
        url: "http://localhost/website/admin_demo/admin/ajax.php?id_cat1=" + id_cat1,
        success: function (data) {
            $('#select_cat2').html(data);
        }
        });
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


