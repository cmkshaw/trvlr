<?php

// Get the product data
$nameVal = $_POST['Name'];
$descriptionVal = $_POST['Description'];
$optionIDVal = $_POST['OptionID'];
//$mapID = $_POST['Location'];
//$RatingVal = $_POST['Rating'];
//$UserIDVal = $_POST['UserID'];
$optionIDVal = $_POST['OptionID'];

$pattern = "/[0-9]/";

// Validate inputs
/*if (empty($nameVal) || empty($descriptionVal)) {
	echo "<script type='text/javascript'>window.alert('All feilds are required. Please ensure there are no empty fields')</script>";
} 
elseif(preg_match($pattern,$nameVal)) {
	echo "<script type='text/javascript'>window.alert('Please enter only letters in the Name feild')</script>";
}
elseif(preg_match($pattern,$descriptionVal)) {
	echo "<script type='text/javascript'>window.alert('Please enter only letters in the Description feild')</script>";
}
/*elseif(preg_match($pattern,$LocationVal)) {
	echo "<script type='text/javascript'>window.alert('')</script>";
}*/

//else {
    // If valid, add the product to the database 
    require_once('database.php');
	require_once('ClassActivity.php');
	require_once('IUDActivity.php');
	
    $classInst = new activity();
	$columnsInst = new ActivityColumns( $activityIDVal, $nameVal, $descriptionVal, $optionIDVal/*, $mapID, $RatingVal, $UserIDVal*/);
	$execute = $classInst->insertActivity($columnsInst);
	
//}
//<script type='text/javascript'>window.alert($NameVal . ' is awaiting approval, you will be notified of the status')</script>

?>