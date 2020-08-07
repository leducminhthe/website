<?php

class DeleteSPController extends Controller{

    function Trangchu(){

        if( isset($_GET["MaSP"]) ){
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['MaSP'] == $_GET['MaSP']) {
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been remove..')</script>";
                    echo "<script>window.location = '/website/GioHangController'</script>";
                }        
            }
        }else{
            echo "false";
        }

        $this->view("layout2", [
            "Page"=>"giohang",
        ]);
    }

    function deleteAll(){
        unset($_SESSION['cart']);
        header('location:'.link.'GioHangController');
    }
}
?>