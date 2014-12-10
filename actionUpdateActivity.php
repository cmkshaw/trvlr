<?php

// Get the product data
$ActivityIDVal = $_POST['ActivityID'];
$NameVal = $_POST['Name'];
$DescriptionVal = $_POST['Description'];

// Validate inputs 
/*if (empty($Name) || empty($Desc) || empty($Location) || empty($Rating) || empty($UserID) || empty($OptionID)) {
	echo "<script type='text/javascript'>window.alert('All feilds are required. Please ensure there are no empty fields')</script>";
} 
elseif(($Name)) {
	echo "<script type='text/javascript'>window.alert('Please enter only letters in the Name feild')</script>";
}
elseif(($Desc)) {
	echo "<script type='text/javascript'>window.alert('Please enter only letters in the Description feild')</script>";
}
elseif(($Location)) {
	echo "<script type='text/javascript'>window.alert('Invalid information. Check all fields and try again.')</script>";
}

else {*/
    // If valid, add the product to the database
    require_once('database.php');
	require_once('ClassActivity.php');
	require_once('IUDactivity.php');
	
    $classInst = new activity();
	$columnsInst = new ActivityColumns($ActivityIDVal, $NameVal, $DescriptionVal);
	$execute = $classInst->updateActivity($columnsInst);
	
	echo "<script type='text/javascript'>window.alert('$ActivityIDVal $DescriptionVal $NameVal is awaiting approval, you will be notified of the status')</script>";
//}

?>