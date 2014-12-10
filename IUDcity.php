<?php

class city {
	public function selectCity() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM City ORDER BY CityID';
		$result = $db->query($query);//records of categories from category table
		$cityArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$opt = new CityColumns($row['CityID'], 
									$row['Name'], 
									$row['Description'], 
									$row['CityImage']);
			//append category object to my array 
			$cityArray[] = $opt;
		}
		return $cityArray;
	
	}
	
	public function selectCitWhereCit($act) {
		
		$db = Database::getDB();
		
		$query = "SELECT * FROM City WHERE CityID = $act";
		$result = $db->query($query);//records of categories from category table
		
		foreach($result as $row) {
			
			$array = new CityColumns($row['CityID'], 
						$row['Name'], 
						$row['Description'], 
						$row['CityImage']);
		}
		return $array;
	} 
	
}




?>