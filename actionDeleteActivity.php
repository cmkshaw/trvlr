<?php

// Get the product data
$ActivityIDVal = $_POST['ActivityID'];

    require_once('database.php');
	require_once('ClassActivity.php');
	require_once('IUDactivity.php');
	
    $classInst = new activity();
	$columnsInst = new ActivityColumns($ActivityIDVal, $nameVal, $descriptionVal);
	$execute = $classInst->deleteActivity($columnsInst);
	
	echo "<script type='text/javascript'>window.alert('This record has been successfully deleted')</script>";

?>