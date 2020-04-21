<?php
session_start();
$url = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 page not found</title>
</head>
<body>
	<b>error 404: page not found</b>
	<?php
	echo $_SERVER['REQUEST_URI'];
	?>
</body>
</html>