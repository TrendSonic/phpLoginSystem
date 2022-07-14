<?php
include 'header.php';
?>
<section class="signup-form">
	<h2>Sign up</h2>
	<form action="includes/signup.inc.php" method="POST">
		<input type="text" name="name" placeholder="Full name...">
		<input type="text" name="email" placeholder="Email...">
		<input type="text" name="uid" placeholder="Username...">
		<input type="password" name="pwd" placeholder="Password...">
		<input type="password" name="pwdRepeat" placeholder="Repeat password...">
		<button type="submit" name="submit">Sign up</button>
	</form>
	<!-- 	ERROR MESSAGES -->
	<?php
	if (isset($_GET["error"])) {
		if ($_GET["error"] === "emptyinput") {
			echo "All fileds must be filled.";
		} else if ($_GET["error"] === "invalidemail") {
			echo "Invalid email.";
		} else if ($_GET["error"] === "invaliduid") {
			echo "Invalid username.";
		} else if ($_GET["error"] === "passwordshort") {
			echo "Password length must be at leaset 6 chars.";
		} else if ($_GET["error"] === "passwordnotmatch") {
			echo "Passwords do not match.";
		} else if ($_GET["error"] === "usernameexists") {
			echo "Username already exists.";
		} else if ($_GET["error"] === "none") {
			echo "You signed up successfully.";
		}
	}
	?>
</section>

<?php
include 'footer.php';
?>