<?php 

	class MenuModel extends DB{

		public function get_menus(){
			$qr = "SELECT menucha.*, menucon.* 
			FROM menucha INNER JOIN menucon ON menucha.id = menucon.id_Cha_FK";
	        $result = mysqli_query($this->con, $qr);
			if (mysqli_num_rows($result)) {
				$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$menus = [];

				foreach ($rows as $index => $row) {
					if ($row['TenMenuCha']) {
						$id = $row['TenMenuCha'];

						$menus[$id]['MenuCon'][] = [
							'id'=>$row['id'],
							'menucon' => $row['TenMenuCon'],
						];
					}else{
						$id = $row['id'];

						$menus[$id] = [
							'id'=>$row['id'],
							'menucha'=>$row['TenMenuCha'],
							'menucon' => $row['TenMenuCon'],
						];
					}
				}
			}
			echo "<pre>";
  			print_r($menus);
  			echo "</pre>";
			return $result;
		}

		public function MenuCon(){
			$qr = "SELECT * FROM menucon";
	        $rows = mysqli_query($this->con, $qr);
			return $rows;
		}

	}

 ?>