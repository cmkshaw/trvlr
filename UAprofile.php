<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="styles/userAccount.css" rel="stylesheet" type="text/css" />
<?php include 'generalLinks.php'; ?>
<script src="//connect.facebook.net/en_US/all.js"></script>
</head>

<body>
<div id="main_container">
	<?php include 'header.php'; ?>
    
	<!--<iframe src="https://www.facebook.com/plugins/registration?
             client_id=113869198637480&
             redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fecho%2F&
             fields=name,birthday,gender,location,email"
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="100%"
        height="330">
	</iframe> -->
    <div id="accountProfile">
        
        <div id="details">
        <div id="photo"></div>
        	<h1>Alicia Thomson</h1>
            <ul>
                <li>Cambridge Ontario</li>
            </ul>
            <h2>My Trips</h2>
            <ul>
            	<li class="large"><a href="#">Girls Night Out</a></li>
                <li>March 8 2013</li>
                <li class="large"><a href="#">Toronto with the Family</a></li>
                <li>April 14 2013</li>
                <li class="large"><a href="#">Warped Tour</a></li>
                <li>July 22 2013</li>
                
                <li class="seeMore large"><a href="#" >See More...</a></li>
            </ul>
        </div>
        <!-- deatils -->
        <div id="accountRightside">
			<div class="button">
            	<a href="#"><h2>Plan a Trip</h2></a>
            </div>
            <div class="button">
            	<a href="#"><h2>Add a New Hangout</h2></a>
            </div>
            <div class="button">
            	<a href="#"><h2>Favourite Hangouts</h2></a>
            </div>
        </div>
        <!-- accoutRightside -->
    </div>
    <!-- accountProfile -->
    <?php include 'footer.php'; ?>
</div>
<!-- main_container -->
</body>
</html>
