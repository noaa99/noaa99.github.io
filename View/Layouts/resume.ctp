<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resume, Personal website, Responsive, Robotics, Embedded Software, Web Development, Cal Poly, KAIST, YONSEI, UC Riverside" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="css/resume/material.css">
	<link rel="stylesheet" href="css/resume/tether.min.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/resume/dropdown.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<link rel="stylesheet" href="css/resume/style.css">
	<link rel="stylesheet" href="css/resume/style_add.css" type="text/css">
</head>
<body>
	<?php echo $this->fetch('content'); ?>
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/smooth-scroll.js"></script>
	<script src="js/dropdown.min.js"></script>
	<script src="js/jquery.touch-swipe.min.js"></script>
	<script src="js/jquery.viewportchecker.js"></script>
	<script src="js/script.js"></script>
	
	
	<input name="animation" type="hidden">
</body>
</html>