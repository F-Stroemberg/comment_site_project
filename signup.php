<?php
  date_default_timezone_Set('Europe/Stockholm');
	include 'includes/dbh.inc.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Signup</title>
  </head>

<?php include_once 'header.php'; ?>

  <body>
    <script src="/assets/myscript.js"></script>
    <section>
      <div>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uname" placeholder="Username" required>
          <input type="email" name="email" placeholder="example@email.com" required>
          <input type="password" name="pwd" placeholder="Password" required>
          <input type="password" name="pwd2" placeholder="Confirm password" required onChange="checkPasswordMatch();">
          <div class="FormAlert" id="divCheckPasswordMatch"></div>
          <button type="submit" type="submit">Sign Up</button>
        </form>
      </div>
    </section>
  </body>
</html>
