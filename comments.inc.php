<?php
/*function that inserts comments into db */
function postComment($conn) {
  if (isset($_POST['sendcomment'])) {
    $u_email = $_POST['u_email'];
    $comment_text = $_POST['comment_text'];

    /*this bit does the inserting */
    $sql = "INSERT INTO comments (comment_user, comment_text)
    VALUES ('$u_email', '$comment_text')";
    $result = mysqli_query($conn, $sql);
  }
}

/*this function gets and lists all comments, might include a filtering based on date posted function later if I have the time */
function getComment($conn){
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);
/*while loop to gett all comments from the db (DO NOT TOUCH, FINNALY GOT THIS TO WORK!)*/
while($row = $result ->fetch_assoc()){
  $u_email = $row['comment_user'];

  $sql2 = "SELECT * FROM users WHERE u_email='".$u_email."'";
  $result2 = mysqli_query($conn, $sql2);

  if ($row2 = $result2 -> fetch_assoc()) {
    echo "<div class = 'cbox'><p>";
    echo "<div class = 'boldid'>";
    echo $row2['comment_user']."<br></div>";
    echo $row['comment_time']."<br>";
    echo nl2br($row['comment_text']);
    echo "</p></div>";
    }
  }
}
 ?>
