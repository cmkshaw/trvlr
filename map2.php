<?php
echo
'<aside id="mapbg"><div id="googleMap"></div></aside> 
    
<section id="usergetdirections">
<form action="map3.php" method="post"
                  id="getdirections">

 
<label>Where are you coming from?</label>
<input type="input" name="fromaddress" />
<br />

<label>Get to:</label>
<input type="input" name="toaddress" value="'?>

<?php echo $getaddress; ?>
<?php echo
'"/>
<br />
<input type="submit" name="directions" value="Get directions"
/>
</form></section>'

?>