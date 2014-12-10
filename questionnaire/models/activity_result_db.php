<?
// this is function that will query the options database based on the option selected

 function getActivityResults($db, $optionID)
 {
 	$query = "SELECT * FROM Activity
              WHERE OptionID = $optionID
              ORDER BY Rating DESC";
    $activityresults = $db->query($query);
    
    // returns PDO object
    return $activityresults; }

  
?>