<?php
//require_once('dbConn2.php');
session_start();

$_SESSION['username'] = "Carotron";
$_SESSION['userid'] = "1";
//$_SESSION['$ActivityIDVal'] = "2";
$_SESSION['$nameVal'] = "hey";
$_SESSION['$descriptionVal'] = "hp";
$_SESSION['$optionID'] = "1";


$addusername = $_SESSION['username'];
$adddate = date("Y-m-d");
$addcomment = $_POST['comment'];
$adduserid = $_SESSION['userid'];
$act = $_SESSION['Activityid'];




require_once('database.php');
require_once('C_mapClass.php');
require_once('C_IUDMap.php');

$ActivityIDVal = 3; //make into post at a later date
$classInst2 = new map();

$mymap = $classInst2->selectMapWhereActivity($ActivityIDVal);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>trvlr . travel, canada, cool things to do, toronto, victoria, vancouver</title>
        <link rel="stylesheet" href="styles/viewActivitycs.css" type="text/css"/>
<?php include 'generalLinks.php'; ?>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA4zV95A9uFfoxmYMalWQR9zrCh8uRcZhU&sensor=false">
        </script>

        <script>
            var myCenter = new google.maps.LatLng('<?php echo $mymap->getlat(); ?>', '<?php echo $mymap->getlong(); ?>');
            //var myCenter=new google.maps.LatLng(48.411357,-123.345575);

            function initialize()
            {
                var mapProp = {
                    center: myCenter,
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                    // icon:'marker.jpg' add custom img
                    title: 'Click to zoom'
                });

                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                    content: '<?php echo $mymap->getaddress(); ?>'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });



            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <div id="main_container">
<?php include 'header.php'; ?>
            
                            <aside class="pathnamecs">
<?php
require_once('ClassActivity.php');
require_once('IUDactivity.php');
$classInst = new activity();
$myactivity = $classInst->selectActivityWhereActivity($ActivityIDVal);
?>

                        <?php
                        require_once('ClassCity.php');
                        require_once('IUDcity.php');
                        $cityidbread = 2; //make into post at a later date
                        $classCity = new city();
                        $mycity = $classCity->selectCitWhereCit($cityidbread);

                        
                        echo $mycity->getName();
                        echo" > ";
                        require_once('ClassOption.php');
                        require_once('IUDoption.php');
                        $optionidbread = 1; //make into post at a later date
                        $classOption = new option();
                        $myoption = $classOption->selectOptWhereOpt($optionidbread);

                        echo $myoption->getName();
                        //echo" > ";
                        //echo $myactivity->getName()
                        ?>
                    </aside>
            
            <section id="activitycs">
                <article id="leftcolcs">
    
                        <?php
                        echo "<h1>" . $myactivity->getName() . "</h1>";
                        echo "<div id='activitydesc'>";
                        echo "<p>" . $myactivity->getDescription() . "</p>";
                        echo "</div>";
                        ?>
                </article>
                <article id="rightcolcs">
                    <aside id="mapbg"><div id="googleMap"></div></aside> 
                    <section id="usergetdirections">
                        <form action="map3.php" method="post"
                              id="getdirections">
                            <label>Where are you coming from?</label>
                            <input type="input" name="fromaddress" />
                            <br />

                            <label>Get to:</label>
                            <input type="input" name="toaddress" value="<?php echo $mymap->getaddress(); ?>">
                            <br />
                            <input type="submit" name="directions" value="Get directions"/>
                        </form></section>
                </article>
                <article id="commentarea">
                    <div id="form2">
                        <h2>Got something to share?</h2>
                        <p>Add a comment.</p>
                        <form action="ActionInsertComment.php" method="post"
                              id="ActionInsertComment">
                            <input type="hidden" name="username" value="<?php echo $addusername;
                        ?>" />
                            <input type="hidden" name="date" value="<?php echo $adddate;
                        ?>"/>
                            <input type="hidden" name="userid" value="<?php echo $adduserid;
                        ?>"/>
                            <input type="hidden" name="activityid" value="<?php echo $ActivityIDVal;
                        ?>"/>
                            <br />
                            <textarea name="comment" cols="55" rows="7"></textarea> 
                            
                            <br />
                            <br />  
                            <input type="hidden" name="userid" value="<?php echo $adduserid;
                        ?>"  />
                            <label>&nbsp;</label>
                            
                            
                            <input type="submit" id="insertcomment" value="Make your mark" />
                            <br />
                        </form>
                    </div>
                    <h2> Comments </h2>
                    <table border="0">
<?php
require_once('C_commentClass.php');
require_once('C_IUDComments.php');

$classComment = new comment();
$columnsComments = new CommentColumns($CommentID, $Username, $Date, $Comment, $UserID, $ActivityIDVal);
$arrayComments = $classComment->selectCommentWhereActivity($columnsComments);

$count = count($arrayComments);

foreach ($arrayComments as $comment) {
    echo "<div id='commentdiv'>";
    echo "<input type='hidden' name='CommentID' value='" . $comment->getCommentID() . "'/>";
    echo "<p>" . $comment->getUsername() . "</p>";
    echo "<p>" . $comment->getDate() . "</p>";
    echo "<p>" . $comment->getComment() . "</p>";
    echo "</div>";
}
?>









                </article>
            </section> <!--main section-->
        </div>
        <!--maincontainer-->
                        <?php include 'footer.php'; ?>
    </body>
</html>
