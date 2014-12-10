<?php

// Get the product data
$WishlistIDVal = $_POST['WishlistID'];

    require_once('database.php');
	require_once('ClassWishlist.php');
	require_once('IUDwishlist.php');
	
    $classInst = new wishlist();
	$columnsInst = new WishlistColumns($WishlistIDVal);
	$execute = $classInst->deleteWishlist($columnsInst);
	
	echo "<script type='text/javascript'>window.alert('This record has been successfully deleted')</script>";

?>