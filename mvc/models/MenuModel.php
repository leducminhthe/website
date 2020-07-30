<?php
	class MenuModel extends DB{

		public function get_menus(){
			$qr = "SELECT table_category_1.id as id_cha, table_category_1.ten as tenmenucha, table_category_2.* 
			FROM table_category_1 INNER JOIN table_category_2 ON table_category_1.id = table_category_2.cat1_id";
	        $result = mysqli_query($this->con2, $qr);
			if (mysqli_num_rows($result)) {
				$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$menus = [];

				foreach ($rows as $index => $row) {
						$id = $row['id_cha'];

						$menus[$id]['id_cha'] = $row['id_cha'];
						$menus[$id]['tenmenucha'] = $row['tenmenucha'];
						$menus[$id]['listMenuCon'][] = [
							'id'=>$row['id'],
							'menucon' => $row['ten'],
						];
						
				}
				// echo "<pre>";
				// print_r($menus);
				// echo "</pre>";
			}
			return $menus;
		}

		public function DanhMucMenuCha($menucha){
			$qr = "SELECT table_category_1.id as id_cha, table_category_1.ten as tenmenucha, table_category_2.* 
			FROM table_category_1 INNER JOIN table_category_2 ON table_category_1.id = table_category_2.cat1_id WHERE table_category_1.id = '$menucha'";
	        $result = mysqli_query($this->con2, $qr);
			if (mysqli_num_rows($result)) {
				$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$menus = [];

				foreach ($rows as $index => $row) {
					$id = $row['id_cha'];

					$menus[$id]['id_cha'] = $row['id_cha'];
					$menus[$id]['tenmenucha'] = $row['tenmenucha'];
					$menus[$id]['listMenuCon'][] = [
						'id'=>$row['id'],
						'menucon' => $row['ten'],
					];	
				}
			}
			return $menus;
		}

		public function MenuCha($menucha){
			$qr = "SELECT * FROM table_category_1 WHERE table_category_1.id = '$menucha'";
	        $rows = mysqli_query($this->con2, $qr);
			return $rows;
		}

		public function ListMenuCha(){
			$qr = "SELECT * FROM table_category_1";
	        $rows = mysqli_query($this->con2, $qr);
			return $rows;
		}

		public function DanhMucMenuCon($danhmuc){
			$qr = "SELECT * FROM table_category_2 WHERE id = '$danhmuc' ";
	        $rows = mysqli_query($this->con2, $qr);
	       
			return $rows;
		}

		public function muc_cha($danhmuc){
			$qr = "SELECT table_category_1.ten

			FROM table_category_1 INNER JOIN table_category_2 ON table_category_1.id = table_category_2.cat1_id

			WHERE table_category_2.id = '$danhmuc' ";
			$rows = mysqli_query($this->con2, $qr);
	       
			return $rows;
		}
	}
?>