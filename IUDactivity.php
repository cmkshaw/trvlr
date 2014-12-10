<?php

class activity {
	/* JOIN U User ON  U.UserID = A.UserID JOIN M Map ON A.ActivityID = M.ActivityID JOIN O Options ON O.OptionID = A.OptionID */
	public function selectActivity() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Activity ';
		$result = $db->query($query);//records of categories from category table
		$activityArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$act = new ActivityColumns($row['ActivityID'], 	
								$row['Name'],
								$row['Description'],
							
								$row['Rating'],
								$row['UserID'],
								$row['OptionID'],
								$row['Approval']);
			
			//append category object to my array 
			$activityArray[] = $act;
		}
		return $activityArray;
	} 
	
	public function selectActivityWhereActivity($act) {
		
		$db = Database::getDB();
                
                
		//$activityID = $act->getActivityID();
		
		$query = "SELECT * FROM Activity WHERE ActivityID = $act";
		$result = $db->query($query);//records of categories from category table
		//$activityArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$activitypoop = new ActivityColumns($row['ActivityID'], 	
								$row['Name'],
								$row['Description'],
								//$row['Rating'],
								//$row['UserID'],
								$row['OptionID']
								//$row['Approval']
                                                                );
			
			//append category object to my array 
			
		}
		return $activitypoop;
	} 
        
        
      
        
        
        
	
	public function insertActivity($act) {
		$db = Database::getDB();
		
		$activityID = $act->getActivityID();
		$activityName = $act->getName();
		$activityDescription = $act->getDescription();
		
		
	
		$activityRating = $act->getRating();
		$activityUserID = $act->getUserID();
		$activityOptionID = $act->getOptionID();
		$activityApproval = $act->getApproval();
		
		$query = "INSERT INTO Activity (ActivityID, Name, Description, Rating, UserID, OptionID, Approval) VALUES ('$activityID', '$activityName', '$activityDescription', '$activityRating', '$activityOptionID', '$activityApproval')";
		
		$execute = $db->exec($query);
	}
	
	public function updateActivity($act) {
		$db = Database::getDB();
		
		$activityID = $act->getActivityID();
		$activityName = $act->getName();
		$activityDescription = $act->getDescription();
		
		$activityRating = $act->getRating();
		$activityUserID = $act->getUserID();
		$activityOptionID = $act->getOptionID();
		$activityApproval = $act->getApproval();
		
		$query = "UPDATE Activity SET Name = '$activityName', Description = '$activityDescription', Rating = '$activityRating',  WHERE ActivityID = '$activityID'";
		echo "does this work";
		$execute = $db->exec($query);
	}
	
	public function deleteActivity($act) {
		$db = Database::getDB();
		
		$activityID = $act->getActivityID();
		
		$query = "DELETE FROM Activity WHERE ActivityID = '$activityID'";
		
		$execute = $db->exec($query);
	}
}




?>