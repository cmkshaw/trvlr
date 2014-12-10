<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add New Hangout Spot</title>
</title>
<link href="styles/userAccount.css" rel="stylesheet" type="text/css" />
<?php include 'generalLinks.php'; ?>

    </head>
<body >
<div id="main_container">
	<?php include 'header.php'; ?>
	<div id="accountProfile">
    <div id="container">
		<div id="leftside">
        	
            <br/>
          
        		<?php 
				$ActivityIDVal = $_POST['ActivityID'];
				
                                $activityID = $_POST['ActivityID'];
                                
				echo $ActivityIDVal;
                                echo $MapIDVal;
				
				require_once('database.php');
				require_once('C_mapClass.php');
				require_once('C_IUDMap.php');
			
				$classInst = new map();
				$columnsInst = new MapColumns($MapIDVal, $nameVal, $addressVal, $latVal, $longVal, $ActivityIDVal);
				$arrayInst = $classInst->selectMapWhereActivity($columnsInst);
	
				$count = count($arrayInst);
				
				foreach ($arrayInst as $opt ){
					
					
					//echo $opt->getMapID();
                                        echo $opt->getlat();
                                        echo $opt->getlong();
					echo $opt->getaddress();
				}
                                
                                echo $nameVal;
				?>
                
               
            </form>
    	</div> 
        <!-- details -->
        </div>
	</div>
    <!-- accountProfile -->
    <?php include 'footer.php'; ?>
</div>
<!-- main_container -->
</body>
</html>