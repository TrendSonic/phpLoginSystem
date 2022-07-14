<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['pwdRepeat'];

	require_once 'db.inc.php';
	require_once 'functions.inc.php';

	if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if (passwordLength($pwd) !== false) {
		header("location: ../signup.php?error=passwordshort");
		exit();
	}
	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../signup.php?error=passwordnotmatch");
		exit();
	}
	if (uidExists($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernameexists");
		exit();
	}

	createUser($conn, $name, $email, $username, $pwd);
} else {
	header("location: ../signup.php");
	exit();
}
