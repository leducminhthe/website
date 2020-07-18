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
			}
			return $menus;
		}
	}
?>