<?php

class comment {
	/* JOIN U User ON  U.UserID = A.UserID JOIN M Map ON A.ActivityID = M.ActivityID JOIN O Options ON O.OptionID = A.OptionID */
	public function selectComment() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Comments ';
		$result = $db->query($query);//records of categories from category table
		$commentArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$cmnt = new CommentColumns($row['CommentID'], 	
								$row['Username'],
								$row['Date'],
							
								$row['Comment'],
								$row['UserID'],
								
								$row['ActivityID']);
			
			//append category object to my array 
			$commentArray[] = $cmnt;
		}
		return $commentArray;
	} 
	
	public function selectCommentWhereActivity($cmnt) {
		
		$db = Database::getDB();
                
                
		$activityID = $cmnt->getActivityID();
		
		$query = "SELECT * FROM Comments WHERE ActivityID = '$activityID'";
		$result = $db->query($query);//records of categories from category table
		$commentArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$cmnt = new CommentColumns($row['CommentID'], 	
								$row['Username'],
								$row['Date'],
							
								$row['Comment'],
								$row['UserID'],
								
								$row['ActivityID']);
			//$CommentID, $Username, $Date, $Comment, $UserID, $ActivityID
			//append category object to my array 
			$commentArray[] = $cmnt;
		}
		return $commentArray;
	} 
        
        
        public function selectCommentWhereUser($cmnt) {
		
		$db = Database::getDB();
               
		$userID = $cmnt->getUserID();
		
		$query = "SELECT * FROM Comments WHERE UserID = '$userID'";
		$result = $db->query($query);//records of categories from category table
		$commentArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$cmnt = new CommentColumns($row['CommentID'], 	
								$row['Username'],
								$row['Date'],
							
								$row['Comment'],
								$row['UserID'],
								
								$row['ActivityID']);
			
			$commentArray[] = $cmnt;
		}
		return $commentArray;
	} 
        
        public function selectCommentWhereComment($commentID) {
		
		$db = Database::getDB();
             
		
		$query = "SELECT * FROM Comments WHERE CommentID = '$commentID'";
		$result = $db->query($query);//records of categories from category table
		 
		
		foreach($result as $row) {
			
			$cmnt = new CommentColumns($row['CommentID'], 	
								$row['Username'],
								$row['Date'],
							
								$row['Comment'],
								$row['UserID'],
								
								$row['ActivityID']);
			
			//$commentArray[] = $cmnt;
		}
		return $cmnt;
	} 
	
      
        
        
        
	public function insertComment($cmnt) {
		$db = Database::getDB();
		
		$commentID = $cmnt->getCommentID();
		$commentUsername= $cmnt->getUsername();
		$commentDate = $cmnt->getDate();
                $commentComment = $cmnt->getComment();
                $commentUserID= $cmnt->getUserID();
                $commentActivityID = $cmnt->getActivityID();
		
		
		$query = "INSERT INTO Comments (CommentID, Username, Date, Comment, UserID, ActivityID) VALUES ('$commentID', '$commentUsername', '$commentDate', '$commentComment', '$commentUserID', '$commentActivityID')";
		
		$execute = $db->exec($query);
	}
	
	public function updateComment($cmnt) {
		$db = Database::getDB();
		
		$commentID = $cmnt->getCommentID();
		$commentUsername= $cmnt->getUsername();
		$commentDate = $cmnt->getDate();
                $commentComment = $cmnt->getComment();
                $commentUserID= $cmnt->getUserID();
                $commentActivityID = $cmnt->getActivityID();
		
		$query = "UPDATE Comments SET Username = '$commentUsername', Date = '$commentDate', Comment = '$commentComment',  WHERE CommentID = '$commentID'";
		
		$execute = $db->exec($query);
	}
	
	public function deleteComment($cmnt) {
		$db = Database::getDB();
		
		$commentID = $cmnt->getCommentID();
		
		$query = "DELETE FROM Comments WHERE CommentID = '$commentID'";
		
		$execute = $db->exec($query);
	}
}




?>