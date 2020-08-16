<?php

include_once('connection.php');

if (isset($_GET['controller'])) {
	$controller = $_GET['controller'];
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	else {
		$action = 'index';
	}
}
else {
	$controller = 'pages';
	$action = 'home';
}

include_once('routes.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1">

	<!-- Title -->
	<link rel="logo" href="">
	<title>Welcome to __________</title>

	<!-- Scripts -->

	<!-- Styles -->
</head>
<body>

</body>
</html>
