<?php

// Get the product data
$WishlistIDVal = $_POST['WishlistID'];
$WishNameVal = $_POST['WishName'];
$ActivityIDVal = $_POST['ActivityID'];
$UserIDVal = $_POST['UserID'];

$pattern = "/[0-9]/";

// Validate inputs
if (empty($WishlistName)) {
	echo "<script type='text/javascript'>window.alert('All feilds are required. Please ensure there are no empty fields')</script>";
} 
elseif(preg_match($pattern,$WishlistName)) {
	echo "<script type='text/javascript'>window.alert('Please enter only letters in the Name feild')</script>";
}

else {
    // If valid, add the product to the database
    require_once('database.php');
	require_once('ClassWishlist.php');
	require_once('IUDwishlist.php');
	
    $classInst = new wishlist();
	$columnsInst = new WishlistColumns($WishlistIDVal, $WishNameVal, $UserIDVal, $ActivityIDVal);
	$execute = $classInst->insertWishlist($columnsInst);
	
	echo "<script type='text/javascript'>window.alert($WishlistNameVal . ' has been created')</script>";
}


?>