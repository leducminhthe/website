<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/company.php';  ?>

<?php
    // gọi class category
    $company = new company(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertCompany = $company -> insert_company($_POST); // hàm check catName khi submit lên
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Update'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $updateCompany = $company -> update_company($_POST); // hàm check catName khi submit lên
    }

    $show_company = $company -> show_company();
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Company</h2>
        <?php 
            if(!$show_company == null ){
            foreach ($show_company as $key => $value) { ?>

                <div class="block">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="form">
                            
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>Company</label>
                                </td>
                                <td>
                                    <textarea name="company_desc" class="tinymce"><?php echo $value['company_desc'] ?></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Update" Value="Update" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            <?php } ?>

        <?php }else{ ?>

            <div class="block">
                    <form action="" method="post" enctype="multipart/form-data">
                        <table class="form">
                            
                            <tr>
                                <td style="vertical-align: top; padding-top: 9px;">
                                    <label>Company</label>
                                </td>
                                <td>
                                    <textarea name="company_desc" class="tinymce"></textarea>
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

        <?php } ?>
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


