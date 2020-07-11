<?php

class GioHangController extends Controller{

    function Trangchu(){

        $this->view("layout2", [
            "Page"=>"giohang",
        ]);
    }

    public function BuySP(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

            if(isset($_SESSION['cart'])){

                $item_array_id = array_column($_SESSION['cart'], "MaSP");

                if(in_array($_POST['spId'], $item_array_id)){
                    echo "<script>alert('Product is already added in the cart..!')</script>";
                }else{
                    $count = count($_SESSION['cart']);
                    $item_array = array(
                        'MaSP' => $_POST['spId'],
                        'SL' => $_POST['quantity'],
                        'TENSP' => $_POST['TenSP'],
                        'AnhSP' => $_POST['AnhSP'],
                        'price'=> $_POST['Price']
                    );

                    $_SESSION['cart'][$count] = $item_array;
                }
            }else{
                 $item_array = array(
                    'MaSP' => $_POST['spId'],
                    'SL' => $_POST['quantity'],
                    'TENSP' => $_POST['TenSP'],
                    'AnhSP' => $_POST['AnhSP'],
                    'price'=> $_POST['Price']
                    );

                // Create new session variable
                $_SESSION['cart'][] = $item_array;
            }
        }

        $this->view("layout2", [
            "Page"=>"giohang",
        ]);
    }
}
?>