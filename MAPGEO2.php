<html>
 <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAPmINPtwpJg9G62dw6QTpXhRt_tvnWFRiu0tk15EYgi_sP2kjkBRMyBIDDhzjx9u-zclsBZfdibVTMg"
        type="text/javascript" charset="utf-8">
     </script>
     	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		<link href="../css/weart.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
  <body onload="load()">
		<div align="center">
			<table width="709" border="0" cellspacing="2" cellpadding="0">
				<tr>
					<td width="700">
						<div id="map" style="width:700px; height:440px"></div>
						<script type="text/javascript">
    //<![CDATA[


    var map = null;
    var geocoder = null;

  
    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(10, -180), 2);
        map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());

        geocoder = new GClientGeocoder();
        
        GEvent.addListener(map, 'click', function(overlay, point) {
     	 if (point) {
     	   document.getElementById("show_x").innerHTML = point.x;
    	    document.getElementById("show_y").innerHTML = point.y;
     	 }
  		 });	
  		 
  		GEvent.addListener(map, 'zoomend',
                       function(oldZoomLevel, newZoomLevel) {
  		   document.getElementById("zoom_old").innerHTML = oldZoomLevel;
  		   document.getElementById("zoom_new").innerHTML = newZoomLevel;
	    });
    
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
              map.setCenter(point, 14);
              var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml(address + "<br>Long: " + point.x + "<br>Lati:  " + point.y);
              
              document.getElementById("show_x").innerHTML = point.x;
      		  document.getElementById("show_y").innerHTML = point.y;
      		  document.getElementById("zoom_new").innerHTML = 14;
            }
          }
        );
      }
    }

    //]]>
    </script>
					<td width="18"><img src="image140/triLeft.gif" alt="" width="12" height="12" border="0" hspace="2"/></td>
				<tr>
					<td align="center" valign="top" width="700"><img src="image140/triUp.gif" alt="" width="12" height="12" border="0"/>
						<hr/>
					</td>
					<td width="18"></td>
				</tr>
				<tr>
							<td colspan="2" width="720">
						<table width="721" border="0" cellspacing="2" cellpadding="0">
							<tr>
								<td class="body" colspan="4" width="594">
									<div class="caption">
										 Drag your target place to the center of the map. Enlarge map a little by little. And click on the place.<br/>
										
									</div>
									
								</td>
								<td class="body" rowspan="4" align="center" valign="top">
									<div align="center">
										
									</div>
								</td>
							</tr>
							<tr>
								<td class="body" align="right" width="112">
									<div align="left">
										Decimal Longitude:</div>
								</td>
								<td class="body" width="240">
											<div id="show_x"></div>
										</td>
										
								<td class="body" width="136"><div id="zoom_old"></div></td>
							</tr>
									<tr>
										<td class="body" align="right" width="112">
									<div align="left">
										Decimal Latitude:</div>
								</td>
										<td class="body" width="240">
											<div id="show_y"></div>
										</td>
								<div id="zoom_new"></div>
										
												<form action="#" onsubmit="showAddress(this.address.value); return false">
													<P>
														<input type="text" size="50" name="address" value="Columbus Circle, New York, NY" /><input type="submit" value="Take Me!" />
													</P>
												</form>
											</font></div>
								</td>
							</tr>
						</table>
						<hr/>
						
								</font></a></p>
							</td>
						</tr>
					</td>
				</tr>
			</table>
		</div>
	</body>

</html>