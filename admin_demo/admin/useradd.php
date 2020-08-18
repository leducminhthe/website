<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/user.php';  ?>
<?php
    // gọi class category
    $user = new user(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertUser = $user ->insert_User($_POST); // hàm check catName khi submit lên
    }
  ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add User</h2>
        <?php 
            if(isset($insertUser)){
                echo $insertUser;
            }
         ?>   
        <div class="block">

         <form action="useradd.php" method="post" >
            <table class="form">
               
                <tr>
                    <td>
                        <label>Usename</label>
                    </td>
                    <td>
                        <input name="Username" type="text" placeholder="Enter Username" class="medium" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>
                        <input name="Phone" type="text" placeholder="Enter Phone" class="medium" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input name="Email" type="email" placeholder="Enter Email" class="medium" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input name="Password" type="password" placeholder="Enter Password" class="medium" required/>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Level</label>
                    </td>
                    <td>
                        <select id="level" name="level">
                            <option>Chọn</option>
                            <option value="1">admin</option>
                            <option selected value="0">User</option>
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


