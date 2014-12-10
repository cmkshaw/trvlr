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
        	<h1>Add a New Hangout Spot</h1>
            <br/>
            <p>Edit</p>
            
        		<?php 
				require_once('database.php');
				require_once('C_mapClass.php');
				require_once('C_IUDMap.php');
			
				$classInst = new map();
				$arrayInst = $classInst->selectMap();
				$count = count($arrayInst);
				
				foreach ($arrayInst as $opt ){
					
					$x = $x + 1;
					echo "<p>".$opt->getaddress()."</p>";
					echo "<form action='C_DisplayActivity.php' method='post'>
					<input type='hidden' name='ActivityID' value='" .$opt->getActivityID()."'/>
					<input type='submit' value='Edit'/>
					</form>
					<form action='actionDeleteActivity.php' method='post'>
					<input type='hidden' name='ActivityID' value='" .$opt->getActivityID()."'/>
					<input type='submit' value='Delete'/>
					</form>";
				}
				?>	
            
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