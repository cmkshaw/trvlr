<?php

// Get the product data
$CommentIDVal = $_POST['CommentID'];

   require_once('database.php');
require_once('C_commentClass.php');
require_once('C_IUDComments.php');
	
        
        $classComment = new comment();
$columnsComments = new CommentColumns($CommentIDVal, $Username, $Date, $Comment, $UserID, $ActivityIDVal);
$arrayComments = $classComment->deleteComment($columnsComments);
	
	echo "<script type='text/javascript'>window.alert('This comment has been successfully deleted')</script>";

?>