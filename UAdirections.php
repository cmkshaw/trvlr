<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<title>Google Maps API v3 Directions Example</title> 
<link href="styles/userAccount.css" rel="stylesheet" type="text/css" />
<?php include 'generalLinks.php'; ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head> 

<!-- http://stackoverflow.com/questions/3896871/google-map-driving-direction-source-code-for-their-example -->

<body style="font-family: Arial; font-size: 12px;">
<div id="main_container">
	
	<?php include 'header.php'; ?>
    <div id="accountProfile"> 
    	
		<div id="details">
        	<h1>Get Directions</h1>
     		<div id="map" style="width: 280px; height: 400px; float: left;"></div> 
     	</div>
       	<div id="accountRightside">asdf
     		<div id="panel" style="width: 300px; float: right;"></div> 
            
		   	<script type="text/javascript"> 
        
            	var directionsService = new google.maps.DirectionsService();
             	var directionsDisplay = new google.maps.DirectionsRenderer();
        
            	var map = new google.maps.Map(document.getElementById('map'), {
               		zoom:7,
               		mapTypeId: google.maps.MapTypeId.ROADMAP
             	});
        
             	directionsDisplay.setMap(map);
             	directionsDisplay.setPanel(document.getElementById('panel'));
        
             	var request = {
               		origin: 'Chicago', 
               		destination: 'New York',
               		travelMode: google.maps.DirectionsTravelMode.DRIVING
             	};
        
             	directionsService.route(request, function(response, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(response);
					}
             	});
			</script> 
		</div> 
        <!-- details -->
	</div>
    <!-- accountProfile -->
    
	<?php include 'footer.php'; ?>
</div>
<!-- main_container -->
</body>
</html>
