<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/brand.php';  ?>
<?php
    $brand = new brand(); 
    if(!isset($_GET['brandid']) || $_GET['brandid'] == NULL){
        echo "<script> window.location = 'brandlist.php' </script>";
        
    }else {
        $id = $_GET['brandid']; // Lấy catid trên host
    }
    // gọi class category
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $brandName = $_POST['brandName'];
        $category = $_POST['category'];
        $updateBrand = $brand -> update_brand($brandName,$id,$category); // hàm check catName khi submit lên
    }
    
  ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa thương hiệu</h2>      
               <div class="block copyblock"> 
                <?php 
                    if(isset($updateBrand)){
                        echo $updateBrand;
                    }
                 ?>
                 <?php 
                    $get_brand_name = $brand->getbrandbyId($id);
                    if($get_brand_name){
                        while ($result = $get_brand_name->fetch_assoc()) {
                            
                        
                  ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['TenMenuCon']; ?>" name="brandName" placeholder="Sửa thương hiệu sản phẩm..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="select" name="category">

                                    <?php 
                                    $cat = new category();
                                    $catlist = $cat->show_category();
                                    if($catlist){
                                        while ($result_id_cha = $catlist->fetch_assoc()){
                                    ?>
                                        <option 
                                        <?php 
                                            if($result_id_cha['id'] == $result['id_Cha_FK'])
                                                { echo 'selected'; }
                                        ?>    
                                                value=" <?php echo $result_id_cha['id'] ?> "> <?php echo $result_id_cha['TenMenuCha'] ?></option>
                            
                                        <?php  
                                        }
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Edit" />
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
<?php include 'inc/footer.php';?>