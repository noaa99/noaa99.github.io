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
	
	<link rel="stylesheet" href="css/main.multi.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-89271378-2', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
	<?php echo $this->fetch('content'); ?>
	<!-- Scripts -->
	<?php 
		echo $this->fetch('script');
	?>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script> 
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/skel.multi.min.js"></script>
	<script src="js/util.multi.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="js/main.multi.js"></script>

</body>
</html>