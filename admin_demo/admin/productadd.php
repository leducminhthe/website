<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php
    // gọi class category
    $pd = new product(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertProduct = $pd -> insert_product($_POST); // hàm check catName khi submit lên
    }
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <?php 
            if(isset($insertProduct)){
                echo $insertProduct;
            }
         ?>   
        <div class="block">

         <form action="productadd.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input name="productName" type="text" placeholder="Nhập tên sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mã sản phẩm</label>
                    </td>
                    <td>
                        <input name="product_MaSP" type="text" placeholder="Nhập mã sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>SP_Best</label>
                    </td>
                    <td>
                        <input name="product_SPBest" type="text" placeholder="Nhập hoặc ko.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>SP_KM</label>
                    </td>
                    <td>
                        <input name="product_SPKM" type="text" placeholder="Nhập hoặc ko.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Danh mục sản phẩm</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                            <option>Chọn chuyên mục</option>
                            <?php 
                            $cat = new category();
                            $catlist = $cat->show_category();
                            if($catlist){
                                while ($result = $catlist->fetch_assoc()){
                            
                             ?>
                            <option value=" <?php echo $result['id'] ?> "> <?php echo $result['TenMenuCha'] ?> </option>
                            
                            <?php 
                            }
                             }
                             ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Thương hiệu</label>
                    </td>
                    <td>
                        <select id="select" name="brand">
                            <option>Chọn thương hiệu</option>
                            <?php 
                            $brand = new brand();
                            $brandlist = $brand->show_brand();
                            if($brandlist){
                                while ($result = $brandlist->fetch_assoc()){
                            
                             ?>
                            <option value=" <?php echo $result['id'] ?> "> <?php echo $result['TenMenuCon'] ?> </option>
                            
                            <?php 
                            }
                             }
                             ?>
                        </select>
                    </td>
                </tr>
                
                 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Thông tin chi tiết</label>
                    </td>
                    <td>
                        <textarea name="product_desc" class="tinymce"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Giá_BD</label>
                    </td>
                    <td>
                        <input name="price_BD" type="text" placeholder="Nhập giá..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Giá_HT</label>
                    </td>
                    <td>
                        <input name="price_HT" type="text" placeholder="Nhập hoặc ko.." class="medium" />
                    </td>
                </tr>
            
                <!-- <tr>
                    <td>
                        <label>Ảnh SP</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
                    </td>
                </tr> -->
                <tr>
                    <td>
                        <label>Ảnh SP link</label>
                    </td>
                    <td>
                        <input name="image_link" type="text" class="medium" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Active</label>
                    </td>
                    <td>
                        <select id="select" name="active">
                            <option>Chọn</option>
                            <option value="Còn hàng">Còn hàng</option>
                            <option value="Tạm thời hết hàng">Tạm thời hết hàng</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
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
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


