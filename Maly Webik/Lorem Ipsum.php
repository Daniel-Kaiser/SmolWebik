<?php
session_start();
if (($_SESSION["loggedIn"] ?? false) === false){
	header('location: Login.php');
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
	<a href="Logout.php"><button>logout</button></a>
</body>
</html>