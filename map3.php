<?php
require('dbConn2.php');

  $sqlquery = "SELECT * FROM Map WHERE ActivityID=1"; //replace with value?
            $maps = $db->query($sqlquery); 
               
            
$fromaddress = $_POST['fromaddress'];
$toaddress = $_POST['toaddress'];


foreach ($maps as $map) : 
 
//echo $map[0]; //lat just to show the lat and long
//echo $map[1]; //lat just to show the lat and long
//echo $map[2]; //long    
//echo $map[3]; //lat just to show the lat and long
//echo $map[4]; //long

$maplat = $map[3]; //lat
$maplng = $map[4]; //long
  
endforeach;  
      
$mapmsg = $map[1]; //currently "type"
//$maplat = 48.411357;
//$maplng = -123.345575;

?>

<!DOCTYPE html>
<html> 
<head> 
   <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
   <title>Google Maps API v3 Directions Example</title> 
   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA4zV95A9uFfoxmYMalWQR9zrCh8uRcZhU&sensor=false">
   
   </script>
</head> 
<body style="font-family: Arial; font-size: 12px;"> 
   <div style="width: 600px;">
     <div id="map" style="width: 280px; height: 400px; float: left;"></div> 
     
     
     <div id="panel" style="width: 300px; float: right;"></div> 
   </div>

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
       origin: '<?php echo $fromaddress; ?>', 
       destination: '<?php echo $toaddress; ?>',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script> 
</body> 
</html>