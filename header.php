<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Project 01</title>
	<link rel="stylesheet" href="css/reset.css">
</head>

<body>
	<nav>
		<div class="wrapper">
			<a href="index.php">LoginSyS</a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="discover.php">About us</a></li>
				<li><a href="blog.php">Find Blogs</a></li>
				<?php
				if (isset($_SESSION["useruid"])) {
					echo "<li><a href='profile.php'>Profile page</a></li>";
					echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
				} else {
					echo "<li><a href='signup.php'>Sign up</a></li>";
					echo "<li><a href='login.php'>Log in</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>

	<div class="wrapper">