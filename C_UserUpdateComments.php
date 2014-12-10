<?php

$UserID = 1; //replace with POST
$CommentIDVal = $_POST['CommentID'];

require_once('database.php');
require_once('C_commentClass.php');
require_once('C_IUDComments.php');

//$classComment = new comment();
//$columnsComments = new CommentColumns($CommentID, $Username, $Date, $Comment, $UserID, $ActivityIDVal);
//$arrayComments = $classComment->selectCommentWhereUser($columnsComments);

$classComment = new comment();
$mycomment = $classComment->selectCommentWhereComment($CommentIDVal);


    echo "<div id='commentdiv'>";
    echo "<form action='ActionUpdateComment.php' method='post'>";
    echo "<input type='hidden' name='CommentID' value='" . $mycomment->getCommentID() . "'/>";
    echo "<input type='hidden' name='Username' value='" . $mycomment->getUsername() . "'/>";
    echo "<input type='hidden' name='Date' value='" . $mycomment->getDate() . "'/>";
    echo "<p>" . $mycomment->getUsername() . "</p>";
    echo "<p>" . $mycomment->getDate() . "</p>";
    echo "<input type='text' name='Comment' value='" . $mycomment->getComment() . "'/>";
    
    
//    echo "<p>" . $comment->getUsername() . "</p>";
//    echo "<p>" . $comment->getDate() . "</p>";
//    echo "<p>" . $comment->getComment() . "</p>";
    echo "<input type='submit' value='Submit Changes'/>
</form>

";
    echo "</div>";

?>
