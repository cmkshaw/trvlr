<!-- This model file contains the functions for select statements for categories for questionnaire-->

<?php
// this block of code will selsect from the categories, based on the city that is selected
 function getCategoryByCityID($db, $cityID)
 {
 	
 	
 	$query = "SELECT * FROM Category
              WHERE CityID = $cityID";
    $categories = $db->query($query);
    
// returns PDO object
    return $categories;
 }





?>