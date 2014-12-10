<?php

class photo {
	/* JOIN U User ON  U.UserID = A.UserID JOIN M Map ON A.ActivityID = M.ActivityID JOIN O Options ON O.OptionID = A.OptionID */
	public function selectPhoto() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Photo ';
		$result = $db->query($query);//records of categories from category table
		$photoArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$photo = new PhotoColumns($row['PhotoID'], 	
								$row['Name'],
								$row['Path'],		
								$row['Caption'],
								$row['ActivityID']);
			$photoArray[] = $photo;
		}
		return $photoArray;
	} 
	
	public function selectPhotoWhereActivity($photo) {
		
		$db = Database::getDB();
		
		$activityID = $photo->getActivityID();
		
		$query = "SELECT * FROM Photo WHERE ActivityID = '$activityID'";
		$result = $db->query($query);//records of categories from category table
		$photoArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$photo = new PhotoColumns($row['PhotoID'], 	
								$row['Name'],
								$row['Path'],
							
								$row['Caption'],
								
								$row['ActivityID']);
			
			//append category object to my array 
			$photoArray[] = $photo;
		}
		return $photoArray;
	} 

        
	
	public function insertPhoto($photo) {
		$db = Database::getDB();
		
		$PhotoID = $photo->getPhotoID();
		$photoName = $photo->getName();
		$photoPath = $photo->getPath();
		$photoCaption= $photo->getCaption();
		$photoActivityID = $photo->getActivityID();
		
		$query = "INSERT INTO Photo (PhotoID, Name, Path, Caption, ActivityID) VALUES ('$PhotoID', '$photoName', '$photoPath', '$photoCaption', '$photoActivityID')";
		
		$execute = $db->exec($query);
	}
	
	public function updatePhoto($photo) {
		$db = Database::getDB();
		
		$PhotoID = $photo->getPhotoID();
		$photoName = $photo->getName();
		$photoPath = $photo->getPath();
		$photoCaption= $photo->getCaption();
		$photoActivityID = $photo->getActivityID();
		
		$query = "UPDATE Photo SET Name = '$photoName', Path = '$photoPath', Caption = '$photoCaption',  WHERE ActivityID = '$photoActivityID'";
		echo "does this work";
		$execute = $db->exec($query);
	}
	
	public function deleteActivity($photo) {
		$db = Database::getDB();
		
		$PhotoID= $photo->getPhotoID();
		
		$query = "DELETE FROM Photo WHERE PhotoID = '$PhotoID'";
		
		$execute = $db->exec($query);
	}
}




?>