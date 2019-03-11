<?php 
class Products extends model{

	public function getList()
	{
		$array = array();

		$sql = "SELECT * FROM products ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			foreach($array as $key => $item){
				
			}
		}

		return $array;
	}

}

?>