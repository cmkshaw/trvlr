<?php

echo '<link rel="shortcut icon" href="images/favicon2.ico">
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Patrick+Hand|Text+Me+One" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
		   $("#mobile_nav ul li span").click(function() {
		   		var hidden = $(this).parents("li").children("ul").is(":hidden");
		   		
				$("#mobile_nav>ul>li>ul").hide()        
			   	$("#mobile_nav>ul>li>a").removeClass();
			   		
			   	if (hidden) {
			   		$(this)
				   		.parents("li").children("ul").toggle()
				   		.parents("li").children("a").addClass("zoneCur");
				   	} 
			   });
        $("#insertcomment").click(function(){
        $.ajax({
        url: send_email.php,
        type:"POST",
        data: {
            email: email_address,
            message: message
        },
        success: function(msg){
                alert("Email Sent");
            }                   
        });
    }
});
		});
	</script>';

?>