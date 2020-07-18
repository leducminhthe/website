<?php
	class CheckoutModel extends DB{

		public function Checkout($name, $email, $phone, $address, $message, $phuongthuc){
			$subtotal = 0;
			if (isset($_SESSION['cart'])) {
				foreach ($_SESSION['cart'] as $row) {
					$tensp = $row['TENSP'];
    				$masp = $row['MaSP'];
    				$sl = $row['SL'];
    				$total = $row['price'] * $row['SL'];
    				$subtotal += $total;
    				$vat = $subtotal * 0.1;	
    				$grandtotal = $vat + $subtotal;
    				$qr = "INSERT INTO donhang(Name, Address, Email, Phone, Message, Grandtotal, TenSP, MaSP, SL, Subtotal, Phuongthuc) 
    				VALUES ('$name', '$address', '$email', '$phone', '$message', '$grandtotal', '$tensp', '$masp', '$sl', '$subtotal', '$phuongthuc')";

    				if($name=='' || $email=='' || $phone=='' || $address=='') {
        				echo "<script>alert('Thông tin khách hàng emty')</script>";
        				echo "<script>window.location= '/website/CheckoutController'</script>";
    				}else{
    					mysqli_query($this->con, $qr);
    					unset($_SESSION['cart']);
						echo "<script>alert('Cảm ơn bạn đã mua hàng của chúng tôi')</script>";
						echo "<script>window.location= '/website/CheckOrderController'</script>";
        			}
				}
				
			}else{
				echo "false";
			}
		}		
	}	
?>