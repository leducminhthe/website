<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php 
	/**
	* 
	*/
	class product
	{
		public $sotin1trang = 20;
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_product($date){
			
			$productName = mysqli_real_escape_string($this->db->link, $date['productName']);
			$product_MaSP = mysqli_real_escape_string($this->db->link, $date['product_MaSP']);

			$SP_Best = mysqli_real_escape_string($this->db->link, $date['product_SPBest']);
			$category = mysqli_real_escape_string($this->db->link, $date['category']);
			$brand = mysqli_real_escape_string($this->db->link, $date['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $date['product_desc']);
			$product_infor = mysqli_real_escape_string($this->db->link, $date['product_infor']);
			$price = mysqli_real_escape_string($this->db->link, $date['price']);
			$active = mysqli_real_escape_string($this->db->link, $date['active']);
			$image_link = mysqli_real_escape_string($this->db->link, $date['image_link']);
			 //mysqli gọi 2 biến. (catName and link) biến link -> gọi conect db từ file db
			
			// kiểm tra hình ảnh và lấy hình ảnh cho vào folder upload
			// $permited = array('jpg','jpeg','png','gif');
			// $file_name = $_FILES['image']['name'];
			// $file_size = $_FILES['image']['size'];
			// $file_temp = $_FILES['image']['tmp_name'];
			
			// $div =explode('.', $file_name);
			// $file_ext = strtolower(end($div));
			// $unique_image = substr(md5(time()), 0,10).'.'.$file_ext;
			// $uploaded_image = "uploads/".$unique_image;

			if($category == "" || $brand == "" || $active == ""){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				// move_uploaded_file($file_temp, $uploaded_image);

				$query = "INSERT INTO table_product(ten, masp, cat1_id, cat2_id, chitietsanpham,thongtinsanpham , gia, online, photo, SP_Best) 
				VALUES('$productName','$product_MaSP','$category','$brand','$product_desc','$product_infor','$price','$active','$image_link', '$SP_Best') ";
				$result = $this->db->insert($query);
				if($result){
					$alert = "<span class='success'>Insert Product Successfully</span>";
					return $alert;
				}else {
					$alert = "<span class='error'>Insert Prodcut NOT Success</span>";
					return $alert;
				}
			}
		}

		public function show_product()
		{
			if( isset($_GET["trang"]) ){
            	$trang = (int)$_GET["trang"];
        	}else{
            	$trang = 1; 
        	};

       		 $from = ($trang - 1 ) * $this->sotin1trang;

			$query = 
			"SELECT table_product.*, table_category_1.ten as tenmenucha, table_category_2.ten as tenmenucon

			FROM table_product INNER JOIN table_category_1 ON table_product.cat1_id = table_category_1.id
			INNER JOIN table_category_2 ON table_product.cat2_id = table_category_2.id LIMIT $from,$this->sotin1trang";
			$result = $this->db->select($query);
			return $result;
		}

		public function search_product($search)
		{
			if( isset($_GET["trang"]) ){
            	$trang = (int)$_GET["trang"];
        	}else{
            	$trang = 1; 
        	};

       		 $from = ($trang - 1 ) * $this->sotin1trang;

			$query = 
			"SELECT table_product.*, table_category_1.ten as tenmenucha, table_category_2.ten as tenmenucon

			FROM table_product INNER JOIN table_category_1 ON table_product.cat1_id = table_category_1.id
			INNER JOIN table_category_2 ON table_product.cat2_id = table_category_2.id 
			WHERE table_product.ten LIKE '%$search%' 
			OR table_category_1.ten = '%$search%'
			OR table_category_2.ten = '%$search%'
			OR masp = '$search'
			LIMIT $from,$this->sotin1trang";
			$result = $this->db->select($query);
			return $result;
		}


		public function update_product($date,$id){
	
			$productName = mysqli_real_escape_string($this->db->link, $date['productName']);
			$product_MaSP = mysqli_real_escape_string($this->db->link, $date['product_MaSP']);

			$SP_Best = mysqli_real_escape_string($this->db->link, $date['product_SPBest']);
			$category = mysqli_real_escape_string($this->db->link, $date['category']);
			$brand = mysqli_real_escape_string($this->db->link, $date['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $date['product_desc']);
			$price = mysqli_real_escape_string($this->db->link, $date['price']);
			$active = mysqli_real_escape_string($this->db->link, $date['active']);
			$image_link = mysqli_real_escape_string($this->db->link, $date['image_link']);

			//Kiem tra hình ảnh và lấy hình ảnh cho vào folder upload
			// $permited  = array('jpg', 'jpeg', 'png', 'gif');

			// $file_name = $_FILES['image']['name'];
			// $file_size = $_FILES['image']['size'];
			// $file_temp = $_FILES['image']['tmp_name'];

			// $div = explode('.', $file_name);
			// $file_ext = strtolower(end($div));
			// // $file_current = strtolower(current($div));
			// $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			// $uploaded_image = "uploads/".$unique_image;


			if($category == "" || $brand == "" || $active == ""){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert; 
			}else{
				// if(!empty($file_name)){
				// 	//Nếu người dùng chọn ảnh
				// 	if ($file_size > 20480) {

		  //   		 $alert = "<span class='success'>Image Size should be less then 2MB!</span>";
				// 	return $alert;
				//     } 
				// 	elseif (in_array($file_ext, $permited) === false) 
				// 	{
				//      // echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";	
				//     $alert = "<span class='success'>You can upload only:-".implode(', ', $permited)."</span>";
				// 	return $alert;
				// 	}
				// 	move_uploaded_file($file_temp,$uploaded_image);
				// 	$query = "UPDATE tbl_product SET
				// 	productName = '$productName',
				// 	product_code = '$product_code',
				// 	productQuantity = '$productQuantity',
				// 	brandId = '$brand',
				// 	catId = '$category', 
				// 	type = '$type', 
				// 	price = '$price', 
				// 	image = '$unique_image',
				// 	product_desc = '$product_desc'
				// 	WHERE productId = '$id'";
					
				// }else{
					//Nếu người dùng không chọn ảnh
					$query = "UPDATE table_product SET

					ten = '$productName',
					masp = '$product_MaSP',
					photo = '$image_link',
					cat2_id = '$brand',
					cat1_id = '$category', 
					online = '$active', 
					gia = '$price',
					SP_Best = '$SP_Best',
					chitietsanpham = '$product_desc'

					WHERE masp = '$id'";
					
				// }
				$result = $this->db->update($query);
					if($result){
						$alert = "<span class='success'>Sản phẩm Updated thành công</span>";
						return $alert;
					}else{
						$alert = "<span class='error'>Sản phẩm Updated không thành công</span>";
						return $alert;
					}
				
			}
		}

		public function del_product($id)
		{
			$query = "DELETE FROM table_product where masp = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Product Deleted Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>Product Deleted Not Success</span>";
				return $alert;
			}
		}
		public function getproductbyId($id)
		{
			$query = "SELECT * FROM table_product where masp = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}		

		public function trang_SP(){
			$qr = "SELECT count(masp) as tongsotin FROM table_product";
	        $result = $this->db->select($qr);
	        $tongsotin = mysqli_fetch_array($result);
	        $sotrang = ceil($tongsotin['tongsotin'] / $this->sotin1trang);
	       
			return $sotrang;
		}

		public function trang_search_SP($search){
			$qr = "SELECT count(masp) as tongsotin FROM table_product WHERE ten LIKE '%$search%' OR masp = '$search'";
	        $result = $this->db->select($qr);
	        $tongsotin = mysqli_fetch_array($result);
	        $sotrang = ceil($tongsotin['tongsotin'] / $this->sotin1trang);
	       
			return $sotrang;
		}
		//Kết thúc Backend

	}
?>