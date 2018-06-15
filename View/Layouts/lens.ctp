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
	
	<link rel="stylesheet" href="css/main.lens.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
	<noscript><link rel="stylesheet" href="css/noscript.lens.css" /></noscript>
</head>

<body class="is-loading-0 is-loading-1 is-loading-2">
	<?php echo $this->fetch('content'); ?>
	<!-- Scripts -->
	<?php 
		echo $this->fetch('script');
	?>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="js/skel.lens.min.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="js/main.lens.js"></script>

</body>
</html>