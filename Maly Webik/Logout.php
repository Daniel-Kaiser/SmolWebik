<?php
session_start();
if (($_SESSION["loggedIn"] ?? false) === False){
	header('location: loremipsum');
	exit();
}
$_SESSION["loggedIn"] = False;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>malyWebik/logout</title>
</head>
<body>
ses logoutlej :)
</body>
</html>

