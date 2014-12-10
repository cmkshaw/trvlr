<?php

$UserID = 1; //replace with POST

require_once('database.php');
require_once('C_commentClass.php');
require_once('C_IUDComments.php');

$classComment = new comment();
$columnsComments = new CommentColumns($CommentID, $Username, $Date, $Comment, $UserID, $ActivityIDVal);
$arrayComments = $classComment->selectCommentWhereUser($columnsComments);

$count = count($arrayComments);

foreach ($arrayComments as $comment) {
    echo "<div id='commentdiv'>";
    echo "<input type='hidden' name='CommentID' value='" . $comment->getCommentID() . "'/>";
    echo "<p>" . $comment->getUsername() . "</p>";
    echo "<p>" . $comment->getDate() . "</p>";
    echo "<p>" . $comment->getComment() . "</p>";
    echo "<form action='C_UserUpdateComments.php' method='post'>
<input type='hidden' name='CommentID' value='" .$comment->getCommentID()."'/>
 <input type='hidden' name='Comment' value'" .$comment->getComment()."'/>   
<input type='submit' value='Edit'/>
</form>

<form action='ActionDeleteComment.php' method='post'>
<input type='hidden' name='CommentID' value='" .$comment->getCommentID()."'/>
<input type='submit' value='Delete'/>
</form>";
    echo "</div>";
}
?>
