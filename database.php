<?php 

class Database {
	
	private static $dsn = 'mysql:host=trvl.db.10087446.hostedresource.com;dbname=trvl';
	private static $username = 'trvl';
	private static $password = 'phpTeam4!';
	private static $db;

	//prevents the object from being automatically initiated 
	private function _contruct() {
	} 
	
	//establishes the database connection 
	public static function getDB(){
		//if $db is not already set than create the connection
		if(!isset(self::$db)){
			try {
				self::$db = new PDO(self::$dsn, self::$username, self::$password);
				echo "connected";
			}
			catch (PDOException $ex)
			{
				$error_message = $ex->getMessage();
				echo $error_message;
				exit();
			}
		}
		
		return self::$db;
	}
}

?>
