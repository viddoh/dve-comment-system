<!-- The basic app layout -->
<DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<h1 class="text-center comment-system-app-comments-heading">dve Comment System v.&nbsp;0.1</h1>
		</header>
		<main>
			<div class="comment-system-app-panel">
				<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/routes.php' ); ?>
			</div>
		</main>
		<footer>
		</footer>
	<body>
<html>