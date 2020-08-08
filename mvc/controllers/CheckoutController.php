<?php

class CheckoutController extends Controller{

    function Trangchu(){

        $menu = $this->model("MenuModel");

        if (isset($_SESSION['cart'])) {
            if (count($_SESSION['cart']) > 0 ) {
                $this->view("layout2", [
                    "Page"=>"Checkout",
                    "Menu"=>$menu->get_menus(),
                ]);
            } else {
                header('location:'.link.'GioHangController');
            }  
        } else {
             header('location:'.link.'GioHangController');
        }  
    }

    public function thanhtoan(){
    	$sp = $this->model("CheckoutModel");

    	if (isset($_POST['order'])) {
    		if (isset($_SESSION['user'])) {
    			$name = $_SESSION['user']['Name'];
    			$email = $_SESSION['user']['Email'];
    			$phone = $_SESSION['user']['Phone'];
    			$address = $_SESSION['user']['Address'];
    		}else{
    			$name = $_POST['name'];
    			$email = $_POST['email'];
    			$phone = $_POST['phone'];
    			$address = $_POST['address'];
    		}

    		$message = $_POST['message'];
    		$phuongthuc = $_POST['pay'];
    	}
       
        //view
        $this->view("layout2", [
            "Page"=>"Checkout",
            "Check"=>$sp->Checkout($name,$email,$phone,$address,$message,$phuongthuc),
        ]);
    }
}
?>