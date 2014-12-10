<?php

// Get the product data
$CusernameVal = $_POST['username'];
$CdateVal = $_POST['date'];
$CcommentVal = $_POST['comment'];
$CuserIDVal = $_POST['userid'];
$CactivityID= $_POST['activityid'];

//$pattern = "/[0-9]/";

// Validate inputs
if (!isset($CusernameVal) ) {
	echo "<script type='text/javascript'>window.alert('Enter a comment while logged in, please.')</script>";
        echo $CusernameVal;
} 
elseif (empty($CcommentVal)) {
	echo "<script type='text/javascript'>window.alert('Please enter text into the comment box before submitting.')</script>";
}

else {
    // If valid, add the product to the database
        require_once('database.php');
	require_once('C_commentClass.php');
	require_once('C_IUDComments.php');
	
        $classInst = new comment();
	$columnsInst = new CommentColumns($CommentIDVal, $CusernameVal, $CdateVal, $CcommentVal, $CuserIDVal, $CactivityID);
	$execute = $classInst->insertComment($columnsInst);
	
	echo "<script type='text/javascript'>window.alert('Your comment has been added')</script>";

}


?>