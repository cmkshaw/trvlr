<?php


class map {
	/* JOIN U User ON  U.UserID = A.UserID JOIN M Map ON A.ActivityID = M.ActivityID JOIN O Options ON O.OptionID = A.OptionID */
	public function selectMap() {
		
		$db = Database::getDB();
		$query = 'SELECT * FROM Map ';
		$result = $db->query($query);//records of categories from category table
		$mapArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			$mapper = new MapColumns($row['MapID'], 	
								$row['name'],
								$row['address'],
								$row['lat'],
								$row['long'],
								$row['ActivityID']
								);
			
			//append category object to my array 
			$mapArray[] = $mapper;
		}
		return $mapArray;
	} 
	
        
        public function selectGeoMapWhereActivity($mapper) {
		
		$db = Database::getDB();
                
                
		$MapID = $mapper->getMapID();
		
		$query = "SELECT * FROM Map 
                    
WHERE ActivityID = '$activityID'";
                
		$result = $db->query($query);//records of categories from category table
		$mapArray = array();//empty array to hold category objects 
		
		foreach($result as $row) {
			
			$mapper = new MapColumns($row['MapID'], 	
								$row['name'],
								$row['address'],
								$row['lat'],
								$row['long'],
								$row['activityID']
								);
			
			//append category object to my array 
			$mapArray[] = $mapper;
		}
		return $mapArray;
        
        }
        
	public function selectMapWhereActivity($ai) {
		
		$db = Database::getDB();
               
		
		$query = "SELECT * FROM Map WHERE ActivityID = $ai"; 
                
		$result = $db->query($query);//records of categories from category table
		
		foreach($result as $row) {
			
			$mapper = new MapColumns($row['MapID'], 	
								$row['name'],
								$row['address'],		
								$row['lat'],
								$row['long'],
								$row['ActivityID']
								);
			
			
		}
               
		return $mapper;
	}
        
        
	
	public function insertMap($mapper) {
		$db = Database::getDB();
		
		$MapID = $mapper->getMapID();
		$mapname = $mapper->getname();
		$mapaddress = $mapper->getaddress();
		$maplat = $mapper->getlat();
		$maplong = $mapper->getlong();
	
		$mapperactivityID = $mapper->getActivityID();
		
		$query = "INSERT INTO Map (MapID, name, address, lat, long, ActivityID) VALUES ('$MapID', '$mapname', '$mapaddress', '$maplat', '$maplong', '$mapperactivityID')";
		
		$execute = $db->exec($query);
	}
	
	public function updateMap($mapper) {
		$db = Database::getDB();
		
		$MapID = $mapper->getMapID();
		$mapname = $mapper->getname();
		$mapaddress = $mapper->getaddress();
		$maplat = $mapper->getlat();
		$maplong = $mapper->getlong();
		$mapperActivityID = $mapper->getActivityID();
		
		$query = "UPDATE Map SET name = '$mapname', address = '$mapaddress', lat = '$maplat', long = '$maplong'  WHERE ActivityID = '$mapperActivityID'";
		echo "does this work";
		$execute = $db->exec($query);
	}
	
	public function deleteMap($mapper) {
		$db = Database::getDB();
		
		$MapID = $mapper->getMapID();
		
		$query = "DELETE FROM Map WHERE MapID = '$MapID'";
		
		$execute = $db->exec($query);
	}
}



//$maps = new map();

//$map = $maps->selectMapWhereActivity(3);

//echo $map->getaddress();
?>