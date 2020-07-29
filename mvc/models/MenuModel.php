<?php
	class MenuModel extends DB{

		public function get_menus(){
			$qr = "SELECT menucha.id as id_cha, menucha.TenMenuCha, menucon.* 
			FROM menucha INNER JOIN menucon ON menucha.id = menucon.id_Cha_FK";
	        $result = mysqli_query($this->con, $qr);
			if (mysqli_num_rows($result)) {
				$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$menus = [];

				foreach ($rows as $index => $row) {
						$id = $row['id_cha'];

						$menus[$id]['id_cha'] = $row['id_cha'];
						$menus[$id]['tenMenuCha'] = $row['TenMenuCha'];
						$menus[$id]['listMenuCon'][] = [
							'id'=>$row['id'],
							'menucon' => $row['TenMenuCon'],
						];
						
				}
				// echo "<pre>";
				// print_r($menus);
				// echo "</pre>";
			}
			return $menus;
		}

		public function DanhMucMenuCha($menucha){
			$qr = "SELECT menucha.id as id_cha, menucha.TenMenuCha, menucon.* 
			FROM menucha INNER JOIN menucon ON menucha.id = menucon.id_Cha_FK
			WHERE menucha.id = $menucha";
	        $result = mysqli_query($this->con, $qr);
			if (mysqli_num_rows($result)) {
				$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$menus = [];

				foreach ($rows as $index => $row) {
						$id = $row['id_cha'];

						$menus[$id]['id_cha'] = $row['id_cha'];
						$menus[$id]['tenMenuCha'] = $row['TenMenuCha'];
						$menus[$id]['listMenuCon'][] = [
							'id'=>$row['id'],
							'menucon' => $row['TenMenuCon'],
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
			$qr = "SELECT * FROM menucha";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

		public function DanhMucMenuCon($danhmuc){
			$qr = "SELECT * FROM menucon WHERE id = '$danhmuc' ";
	        $rows = mysqli_query($this->con, $qr);
	       
			return $rows;
		}
	}
?>