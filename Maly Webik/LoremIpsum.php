<?php
session_start();
if (($_SESSION["loggedIn"] ?? false) === false){
	header('location: login');
	exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>malyWebik/loremIpsum</title>
</head>
<body>
	<?= $_SESSION["username"]?>
	<a href="logout"><button>logout</button></a>
</body>
</html>