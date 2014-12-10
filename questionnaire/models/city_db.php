<!-- This model file contains the functions for select statements for cities -->
<?php
// This block of code selects all cities that are in the cities table and
$query = 'SELECT * FROM City
              ORDER BY CityID';
     // returns PDO object
    $cities = $db->query($query);






?>