<!-- This is the controller page for the questionnaire -->
<?php
// Requiring all the models - for db connection, and selection of city, category and option
require_once('models/database.php');
require('models/city_db.php');
require('models/category_db.php');
require('models/option_db.php');
require('models/activity_result_db.php');

// Here are the get values from the City View
$cityID = $_GET['cityID'];
$cityName = $_GET['cityName'];

// Here are the get values from the Category View
$categoryID = $_GET['categoryID'];
$categoryName = $_GET['categoryName'];

// Here are the get values from the Options View
$optionID = $_GET['optionID'];
$optionName = $_GET['optionName'];

// This variable decides which view to show I hardcoded this variable into url from each view page.
$newPage = $_GET['newPage'];

// use a switch statement based on the $newPage variable to decide which view to show.
switch($newPage) {
// fist case shows the activity results page.	
case 'ActivityResult':
	// here we are calling the function that returns the Actions PDO object
	// using optionID and the database PDO connection object
	$activityresults = getActivityResults($db, $optionID);
	// this variable turns the Actions PDO object into a 2 dimensional array.
	$activityfetchall = $activityresults->fetchAll();
	// storing the value here that will be used for first place display on activity page.
	$firstplace = $activityfetchall[0]['Name'];
	// include the view that shows the activity results.
	include('views/activity_results.php');
	break;

	// displaying options view page.
case 'Option':

	// here we are calling the function that returns the option query object
	$options = getOptionByCategoryID($db, $categoryID);

	// displaying options view
	include('views/option_choice.php');
	break;

	// displaying category view
case 'Category':	
	// here we are calling the function that returns the category query object
	$categories = getCategoryByCityID($db, $cityID);

	// include the category view
	include('views/category_choice.php');
	break;

	default:
	// default will be the city view -> i.e. the home page
	include('views/city_choice.php');
}

?>