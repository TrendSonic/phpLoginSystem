<?php
include 'header.php';
?>

<section class="signup-form">
	<h2>Log in</h2>
	<form action="includes/login.inc.php" method="POST">
		<input type="text" name="uid" placeholder="Username/Email...">
		<input type="password" name="pwd" placeholder="Password...">
		<button type="submit" name="submit">Log in</button>
	</form>
	<!-- 	ERROR MESSAGES -->
	<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] === "emptyinput") {
			echo "All fileds must be filled.";
		} else if ($_GET["error"] === "wronglogin") {
			echo "Invalid login.";
		} else if ($_GET["error"] === "wrongpassword") {
			echo "Invalid password.";
		}
	}
	?>
</section>

<?php
include 'footer.php';
?>