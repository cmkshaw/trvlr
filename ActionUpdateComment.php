<?php


$Comment = $_POST['Comment'];
$CommentIDVal = $_POST['CommentID'];

   require_once('database.php');
require_once('C_commentClass.php');
require_once('C_IUDComments.php');
	
$classComment = new comment();
$columnsComments = new CommentColumns($CommentIDVal, $Username, $Date, $Comment, $UserID, $ActivityIDVal);
//change to one argument???

$arrayComments = $classComment->updateComment($columnsComments);
	
	echo "<script type='text/javascript'>window.alert('Successful update.')</script>";
//}

?>