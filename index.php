<?php
  date_default_timezone_Set('Europe/Stockholm');
	include 'includes/dbh.inc.php';
  include 'includes/comments.inc.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hype Forum</title>
  </head>
  <body>

<?php include_once 'header.php';
/*neat trick one of my groupmates showed me, this will only display the comenting box if user is logged in*/
    if (isset($_SESSION[u_name])) {
      echo "<form method="post" action=".postComment($CONN).">
              <input type="hidden" name="comment_user" value=".$_SESSION[u_email].">
              <textarea name="commenttext"></textarea>
              <button type="sendcomment" name="sendcomment">POST</button>
            </form>";
            else {
              echo "<div class="error">Login to post comments</div>";
            }
    }
/*this shows the comments*/
getComment($conn);
 ?>
  </body>
</html>
