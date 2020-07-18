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
			$SP_KM = mysqli_real_escape_string($this->db->link, $date['product_SPKM']);
			$category = mysqli_real_escape_string($this->db->link, $date['category']);
			$brand = mysqli_real_escape_string($this->db->link, $date['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $date['product_desc']);
			$price_BD = mysqli_real_escape_string($this->db->link, $date['price_BD']);
			$price_HT = mysqli_real_escape_string($this->db->link, $date['price_HT']);
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

			if($productName == "" || $product_MaSP == "" || $category == "" || $brand == "" || $product_desc == "" || $price_BD == "" || $active == "" || $image_link == ""){
				$alert = "<span class='error'>Fiedls must be not empty</span>";
				return $alert;
			}else{
				// move_uploaded_file($file_temp, $uploaded_image);

				$query = "INSERT INTO sanpham(TenSP, MaSP, id_Cha_FK, id_Con_FK, ThongTinChiTiet, GIA_BD, Active, AnhSP) 
				VALUES('$productName','$product_MaSP','$category','$brand','$product_desc','$price_BD','$active','$image_link') ";
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
			$query = 
			"SELECT sanpham.*, menucha.TenMenuCha, menucon.TenMenuCon

			FROM sanpham INNER JOIN menucha ON sanpham.id_Cha_FK = menucha.id
			INNER JOIN menucon ON sanpham.id_Con_FK = menucon.id";

			// $query = "SELECT * FROM tbl_product order by productId desc ";
			$result = $this->db->select($query);
			return $result;
		}

		public function update_product($date,$id){
	
			$productName = mysqli_real_escape_string($this->db->link, $date['productName']);
			$product_MaSP = mysqli_real_escape_string($this->db->link, $date['product_MaSP']);

			$SP_Best = mysqli_real_escape_string($this->db->link, $date['product_SPBest']);
			$SP_KM = mysqli_real_escape_string($this->db->link, $date['product_SPKM']);
			$category = mysqli_real_escape_string($this->db->link, $date['category']);
			$brand = mysqli_real_escape_string($this->db->link, $date['brand']);
			$product_desc = mysqli_real_escape_string($this->db->link, $date['product_desc']);
			$price_BD = mysqli_real_escape_string($this->db->link, $date['price_BD']);
			$price_HT = mysqli_real_escape_string($this->db->link, $date['price_HT']);
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


			if($productName == "" || $product_MaSP == "" || $category == "" || $brand == "" || $product_desc == "" || $price_BD == "" || $active == "" || $image_link == ""){
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
					$query = "UPDATE sanpham SET

					TenSP = '$productName',
					MaSP = '$product_MaSP',
					AnhSP = '$image_link',
					id_Con_FK = '$brand',
					id_Cha_FK = '$category', 
					Active = '$active', 
					GIA_BD = '$price_BD',
					GIA_HT = '$price_HT',
					SP_Best = '$SP_Best',
					SP_KM = '$SP_KM', 
					ThongTinChiTiet = '$product_desc'

					WHERE MaSP = '$id'";
					
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
			$query = "DELETE FROM sanpham where MaSP = '$id' ";
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
			$query = "SELECT * FROM sanpham where MaSP = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}		
		//Kết thúc Backend

	}
?>