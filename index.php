<?php 
session_start();
require_once('libs/app.php');
require_once('libs/json-form-generator/form.class.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My site</title>

		<!-- <link href="/node_modules/material-components-web/dist/material-components-web.min.css" rel="stylesheet">
  		<script src="node_modules/material-components-web/dist/material-components-web.min.js"></script> -->

		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="/main.css" rel="stylesheet">

	</head>
	<body>
		<?php include 'menu.php'?>
		
		<div id="main-content">
			<?php 
				$page = $_SERVER['REQUEST_URI'];
				if(file_exists('pages'.$page.'.php')){
					include_once 'pages'.$page.'.php';
				} else {
					include 'pages/main.php';
				}
			?>
			

		</div>
	</body>
</html>