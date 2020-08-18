<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/user.php';  ?>
<?php
    $user = new user(); 
    if(!isset($_GET['userid']) || $_GET['userid'] == NULL){
        echo "<script> window.location = 'userlist.php' </script>";
    }else {
        $id = $_GET['userid']; // Lấy catid trên host
    }
    // gọi class category
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $updateuser = $user->update_user($_POST,$id);
    }
    
  ?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2>Change user</h2>      
            <div class="block copyblock"> 
            <?php 
                if(isset($updateuser)){
                    echo $updateuser;
                }
            ?>
            <?php 
                $get_user_name = $user->getuserbyId($id);
                if($get_user_name){
                    while ($result = $get_user_name->fetch_assoc()) {     
            ?>
            <form action="" method="post" >
                <table class="form">
                   
                    <tr>
                        <td>
                            <label>Usename</label>
                        </td>
                        <td>
                            <input name="Username" type="text" value="<?php echo $result['adminName'] ?>" class="medium" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Phone</label>
                        </td>
                        <td>
                            <input name="Phone" type="text" value="<?php echo $result['Phone'] ?>" class="medium" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input style="background: brown;" name="Email" type="email" value="<?php echo $result['adminEmail'] ?>" class="medium" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                            <input type="checkBox" name="check" id="check">
                        </td>
                        <td>
                            <input style="background: black;" name="Password" type="password" placeholder="Enter Password" class="medium" id="Password" disabled="" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Level</label>
                        </td>
                        <td>
                            <select id="level" name="level">
                                <?php if ($result['level'] == 1){ ?>
                                    <option selected value="1">admin</option>
                                    <option  value="0">User</option>
                                <?php }else{ ?>
                                    <option value="1">admin</option>
                                    <option selected value="0">User</option>
                                <?php } ?>
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

                <?php 
                    }
                }

                 ?>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#check").change(function(){
                if ($(this).is(":checked")) {
                    $("#Password").removeAttr('disabled');
                    $("#Password").removeAttr('style');
                }else{
                    $("#Password").attr('disabled','');
                    $("#Password").css('background','black');
                }
            })
        })
    </script>

<?php include 'inc/footer.php';?>