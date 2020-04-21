<?php
session_start();
var_dump($_POST);
var_dump($_SESSION);
if (isset($_SESSION["username"]) and isset($_SESSION["password"])){
	header('location: login');
	exit();
}
$username= $_POST["username"] ?? NULL;
$password= $_POST["password"] ?? NULL;
if (is_string($username) and is_string($password)){
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	header('location: login');
	exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>malyWebik/registrace</title>
</head>
<body>
<form method="post">
    <label>Jmeno: <input name="username" type="text" required></label>
	<label>Heslo: <input name="password" type="text" required></label>
    <button type="submit">Submit</button>
</form>
</body>
</html>