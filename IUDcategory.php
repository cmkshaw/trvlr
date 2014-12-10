<?php

class category {
	
	public function selectCategory() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Category ORDER BY CategoryID';
		$result = $db->query($query);//records of categories from category table
		$categoryArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$opt = new CategoryColumns($row['CategoryID'], $row['Name'], $row['Alias'], $row['CategoryImage'], $row['CityID']);
			//append category object to my array 
			$categoryArray[] = $opt;
		}
		return $categoryArray;
	
	}
	
	public function selectCategoryWhere() {
		
		$db = Database::getDB();
		$cityID = $act->getCityID();
		
		$query = "SELECT * FROM Category WHERE CityID = '$cityID' ORDER BY CategoryID";
		$result = $db->query($query);//records of categories from category table
		$categoryArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$opt = new CategoryColumns($row['CategoryID'], $row['Name'], $row['Alias'], $row['CategoryImage'], $row['CityID']);
			//append category object to my array 
			$categoryArray[] = $opt;
		}
		return $categoryArray;
	
	}
	/*public function insertActivity($act) {
		$db = Database::getDB();
		
		$activityID = $act->getActivityID();
		$activityName = $act->getName();
		$activityDescription = $act->getDescription();
		
		
		
		$optionLocation = $act->getLocation();
		$optionRating = $act->getRating();
		$optionUserID = $act->getUserID();
		$optionOptionID = $act->getOptionID();
		$optionApproval = $act->getApproval();
		
		$query = "INSERT INTO Activity (ActivityID, Name, Description) VALUES ('$optionID', '$optionName', '$optionDescription')";
		
		$execute = $db->exec($query);
	}
	
	public function updateActivity($act) {
		$db = Database::getDB();
		
		$optionID = $act->getActivityID();
		$optionName = $act->getName();
		$optionLocation = $act->getLocation();
		$optionDescription = $act->getDescription();
		$optionRating = $act->getRating();
		$optionUserID = $act->getUserID();
		$optionOptionID = $act->getOptionID();
		$optionApproval = $act->getApproval();
		
		$query = "UPDATE Activity SET Name = '$optionName' Location = '$optionLocation' Description = '$optionDescription' Rating = '$optionRating' UserID = '$optionUserID' OptionID = '$optionOptionID' Approval = '$optionApproval' WHERE ActivityID = '$optionID'";
		
		$execute = $db->exec($query);
	}
	
	public function deleteActivity($act) {
		$db = Database::getDB();
		
		$optionID = $act->getActivityID();
		
		$query = "DELETE FROM Activity WHERE ActivityID = '$optionID'";
		
		$execute = $db->exec($query);
	}*/
}




?>