<!-- This model file contains the functions for select statements for options for Questionnaire -->

<?
// this is function that will query the options database based on the category selected

 function getOptionByCategoryID($db, $categoryID)
 {
 	$query = "SELECT * FROM Options
              WHERE CategoryID = $categoryID";
    $options = $db->query($query);
    
   // returns PDO object
    return $options; }

  
?>