<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 2</title>
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>
	<div class="content-section">
		<?php
			require_once('Controller/NewsController.php');
			$news = new NewsController();
			$news->handle();
		?>
	</div>
</body>
</html>

