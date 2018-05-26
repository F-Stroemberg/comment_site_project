<?php
	session_start();
	date_default_timezone_set('Europe/Stockholm');
?>
<header>
  <nav>
    <div>
<?php
/*this displys the logout button if the user is logged in*/
if (isset($_SESSION['u_name'])) {
  echo "<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="submit">Logout</button>
				</form>";
}
/*otherwise this shows the login form and signup link*/
else {
  echo "<form action="includes/login.inc.php" method="POST">
          <input type="text" name="uname" placeholder="Username">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="submit">Login</button>
        </form>
        <a href="signup.php">Sign up</a>;";
}
 ?>
    </div>
  </nav>
</header>
