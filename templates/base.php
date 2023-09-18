<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment | <?= isset($title) ? $title : null; ?></title>
	<link rel="stylesheet" type="text/css" href="public/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/app.css">
	<link rel="shortcut icon" type="image/png" href="public/assets/images/logo/favicon.png">
	<script src="https://kit.fontawesome.com/118716b668.js" crossorigin="anonymous"></script>
	<script src="https://www.paypal.com/sdk/js?client-id=AcgumP5G-PD3ndVrPUd5SM19OXXsfQGPOMiMIfIZuDvBInA26IjVTuz6z1w2QiemoFWOlt4obbpaKckO&currency=EUR"></script>
</head>
<body>

	<?php
		// header
		require('_partials/header.php');

		// content
		echo $content;
	?>

</body>
<script src="public/assets/js/jquery-3.7.0.min.js"></script>
<?= isset($script) ? $script : null; ?>
</html>