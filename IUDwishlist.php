<?php

class wishlist {
	
	public function selectWishlist() {
		
		$db = Database::getDB();
		$query = 'SELECT W.WishlistID, W.WishName A.ActivityID, A.Name, A.Location, U.UserID FROM Wishlist W JOIN Activity A ON A.ActivityID = W.ActivityID JOIN User U ON U.UserID = W.UserID';
		$result = $db->query($query);//records of categories from category table
		$activityArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$wish = new Category($row['WishName'], $row['ActivityID'], $row['Name'], $row['Location'], $row['UserID'], $row['']);
			
			$wish->setID($row['WishlistID']);
			
			//append category object to my array 
			$wishlistArray[] = $wish;
		}
		return $wishlistArray[];
	
	}
	
	public function insertWishlist($wish) {
		$db = Database::getDB();
		
		$WishlistID = $wish->setWishlistID();
		$WishName = $wish->getWishName();
		$UserID = $wish->getUserID();
		$activityID = $wish->getActivityID();
		
		$query = "INSERT INTO Wishlist (WishlistID, WishName, ActivityID, UserID) VALUES ('$WishlistID', '$WishName', '$activityID', '$UserID',)";
		
		$execute = $db->exec($query);
	}
	
	public function updateActivity($wish) {
		$db = Database::getDB();
		
		$WishlistID = $wish->getWishlistID();
		$WishName = $wish->getWishName();
		$UserID = $wish->getUserID();
		$activityID = $wish->getActivityID();
		
		$query = "UPDATE Wishlist SET WishName = '$WishName' ActivityID = '$activityID' UserID = '$UserID' WHERE WishlistID = '$WishlistID'";
		
		$execute = $db->exec($query);
	}
	
	public function deleteWishlist($wish) {
		$db = Database::getDB();
		
		$WishlistID = $wish->getWishlistID();
		
		$query = "DELETE FROM Wishlist WHERE WishlistID = '$WishlistID'";
		
		$execute = $db->exec($query);
	}
}

?>