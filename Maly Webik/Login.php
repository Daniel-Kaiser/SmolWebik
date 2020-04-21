<?php
session_start();
var_dump($_POST);
var_dump($_SESSION);
if (($_SESSION["loggedIn"] ?? false) === True){
	header('location: loremipsum');
	exit();
}
if (!isset($_SESSION["username"]) or !isset($_SESSION["password"])){
	header('location: registrace');
	exit();
}
$username= $_POST["username"] ?? NULL;
$password= $_POST["password"] ?? NULL;
if (is_string($username) and is_string($password)){
	if ($_SESSION["username"] === $username and $_SESSION["password"] === $password){
		$_SESSION["loggedIn"] = True;
		header('location: loremipsum');
		exit();
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>malyWebik/login</title>
</head>
<body>
	<form method="post">
    <label>Jmeno: <input name="username" type="text" required></label>
	<label>Heslo: <input name="password" type="text" required></label>
    <button type="submit">Submit</button>
	</form>
</body>
</html>