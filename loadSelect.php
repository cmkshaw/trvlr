<select name='CategoryID' >
	<?php 
    $CityID = $_POST['CityID'];
    
    require_once('ClassCategory.php');
    require_once('IUDcategory.php');

    $classInst = new category();
	$columnsInst = new CityColumns($cityIDVal, $nameVal, $descriptionVal, $optionIDVal);
    $arrayInst = $classInst->selectCategoryWhere($columnsInst);
    
    foreach ($arrayInst as $opt ){
        echo "<option value ='".$opt->getCityID."'>". $opt->getName() ."</option>";
    }
    ?>				
</select>