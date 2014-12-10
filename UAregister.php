<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Register</title>
<link href="styles/userAccount.css" rel="stylesheet" type="text/css" />
<?php include 'generalLinks.php'; ?>
 <script src="//connect.facebook.net/en_US/all.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '223396704464867', // App ID
      channelUrl : 'http://athomson-webdevelopment.com/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
	
    FB.getLoginStatus(function(response) {
  		if (response.status === 'connected') {
    	// connected
  		} else if (response.status === 'not_authorized') {
    	// not_authorized
		login();
  		} else {
    	// not_logged_in
		login();
  		}
	});

  };
  
  function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
			testAPI();
        } else {
            // cancelled
        }
    });
	
	function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
    });
}
}

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<div id="main_container">
	<?php include 'header.php'; ?>
    <div id="accountProfile">
        
        <div id="details">
        <h1>Register</h1>
        <iframe src="https://www.facebook.com/plugins/registration?
             client_id=113869198637480&
             redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fecho%2F&
             fields=name,birthday,gender,email"
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="95%"
        height="100%">
	</iframe> 
        </div>
        <!-- deatils -->
        <div id="accountRightside">
			<div class="button">
            	<a href="#"><h2>View Activities</h2></a>
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
