<?php

class option {
	
	public function selectOption() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Options ORDER BY OptionID';
		$result = $db->query($query);//records of categories from category table
		$optionArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$opt = new OptionColumns($row['OptionID'], 
									$row['Name'], 
									$row['Alias'], 
									$row['Description'], 
									$row['CategoryID']);
			//append category object to my array 
			$optionArray[] = $opt;
		}
		return $optionArray;
	
	}
	
	public function selectOptWhereCat($act) {
		
		$db = Database::getDB();
		
		$categoryID = $act->getCategoryID();
		
		$query = "SELECT * FROM Options WHERE CategoryID = '$categoryID'";
		$result = $db->query($query);//records of categories from category table
		$optionArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$act = new OptionColumns($row['OptionID'], 	
								$row['Name'],
								$row['Description'],
								$row['Alias'],
								$row['CategoryID']);
			
			//append category object to my array 
			$optionArray[] = $act;
		}
		return $optionArray;
	} 
	
        
	public function selectOptWhereOpt($act) {
		
		$db = Database::getDB();
	
		
		$query = "SELECT * FROM Options WHERE OptionID = $act";
		$result = $db->query($query);//records of categories from category table
		//$optionArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$optiony = new OptionColumns($row['OptionID'], 	
								$row['Name'],
								$row['Description'],
								$row['Alias'],
								$row['CategoryID']);
			
			//append category object to my array 
			//$optionArray[] = $act;
		}
		return $optiony;
	} 
        
       
        
        
        
}




?>