<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add New Hangout Spot</title>
</title>
<link href="styles/userAccount.css" rel="stylesheet" type="text/css" />
<?php include 'generalLinks.php'; ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw" type="text/javascript"></script>
<script type="text/javascript">

	var map = null;
    var geocoder = null;

    function initialize() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(37.4419, -122.1419), 1);
        map.setUIToDefault();
        geocoder = new GClientGeocoder();
      }
    }

    function showAddress(address) {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 15);
              var marker = new GMarker(point, {draggable: true});
              map.addOverlay(marker);
              GEvent.addListener(marker, "dragend", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
              GEvent.addListener(marker, "click", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
	      GEvent.trigger(marker, "click");
            }
          }
        );
      }
    }
    </script>onload="initialize()" onunload="GUnload()"-->
    
    </head>
<!--http://gmaps-samples.googlecode.com/svn/trunk/geocoder/singlegeocode.html-->
<body >
<div id="main_container">
	<?php include 'header.php'; ?>
	<div id="accountProfile">
    <div id="container">
		<div id="leftside">
        	<h1>Add a New Hangout Spot</h1>
            <br/>
            <form action="#Category" method="post">
            <table id="City">
                	<tr>
            			<td><p>City</p></td>
            			<td>
                        	<select name='CityID' >
								<?php 
								require_once('database.php');
								require_once('ClassCity.php');
								require_once('IUDcity.php');
							
								$classInst = new city();
								$arrayInst = $classInst->selectCity();
								$count = count($arrayInst);
								
								foreach ($arrayInst as $opt ){
									echo "<option class='post' value ='".$opt->getCityID()."'>". $opt->getName() ."</option>";
								}
								?>				
            				</select>
                    	</td>
          			</tr>
                    </table>
              		</form>
                    <form action="#" method="post">
                    <table id="Category">
                    <tr>
            			<td><p>Category</p></td>
            			<td>
                        	<div id="result"  class="functions">
							</div>
							<script type="text/javascript">
                                $.ajaxSetup ({
                                    cache: false
                                });
                                var ajax_load = "loading";
                                
                                var loadUrl = "loadSelect.php";
                                
                                
                                $('.post').click(function() {
                                    $("#result").html(ajax_load);
                                    $.post(
                                        loadUrl,
                                        {language: "php", version: 5},
                                        function(responseText){
                                            $("#result").html(responseText);
                                        },
                                        "html"
                                    );
                                });
                                    
                            </script>
                    	</td>
          			</tr>
            	</table>
                </form>
          	<form action="insertActivity.php" method="post">
            <table>
            <tr>
            			<td><p>Category</p></td>
            			<td>
                        	<select name='OptionID' >
								<?php 
								require_once('ClassOption.php');
								require_once('IUDoption.php');
							
								$classInst = new option();
								$arrayInst = $classInst->selectOption();
								
								foreach ($arrayInst as $opt ){
									
									echo "<option value ='".$opt->getOptionID()."'>". $opt->getName() ."</option>";
									
								}
								?>				
            				</select>
                    	</td>
          			</tr>
                    </table>
        		<table>
              		<tr>
                        <td><p>Name of Activity</p></td>
                        <td><input name="Name" type="text"/></td>
          			</tr>
            	
        		<div id="activityPhoto"></div>
        		
              		<tr>
                    	<td><p>Description</p></td>
                        <td><input name="Description" type="text" /></td>
          			</tr>
                    	<td>Address</td>
                        <td><input type="text" style="width:350px" name="Location" value="1600 Amphitheatre Pky, Mountain View, CA" /></td>
              		<tr>
            			<td></td>
            			<td><input type="submit" value="Create" class="submit" /></td>
          			</tr>
            	</table>
      		<!--</form>
       	</div>
       	<div id="accountRightside">
			<form action="UAinsertActivity.php" method="post" onsubmit="showAddress(this.address.value); return false">
      			<p>Enter an address, and then drag the marker to tweak the location.</p>
                <table>
                	<tr>
                    	
                    </tr>
                    <tr>
                    	<td></td>
                    	<td><input type="submit" value="Go!" class="submit" /></td>
                    </tr>
                </table>-->
        		
        		
      			<!--<div id="map_canvas" style="width: 100%; height: 200px"></div>-->
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