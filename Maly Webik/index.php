<?php

$url =  $_SERVER['REQUEST_URI'];

$filename = '404.php';

switch ($url){
    case '/login': {
		$filename = 'Login.php';
		break;
		}
    case '/registrace' : {
		$filename = 'Registrace.php';
		break;
		}
	case '/loremipsum' : {
		$filename = 'LoremIpsum.php';
		break;
		}
	case '/logout' : {
		$filename = 'Logout.php';
		break;
		}
}
require $filename;
?>