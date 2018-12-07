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
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
	
	<link href='//fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/swipebox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<?php
		echo $this->fetch('css');
	?>
	<link rel="stylesheet" type="text/css" href="css/timeline.style.css">	
	<script src="js/jquery-1.11.1.min.js"></script> 




</head>
<body id="top">
	<?php echo $this->fetch('content'); ?>
		<!-- Scripts -->
		<?php 
			echo $this->fetch('script');
		?>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/util.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script src="js/easing.js"></script>	
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="js/main.js"></script>
		<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});

		$(window).on('load', function() {
			$('#project').poptrox({
				caption: function($a) { return $a.next('h3').text(); },
				overlayColor: '#2c2c2c',
				overlayOpacity: 0.85,
				popupCloserText: '',
				popupLoaderText: '',
				selector: '.work-item a.image',
				usePopupCaption: true,
				usePopupDefaultStyling: false,
				usePopupEasyClose: false,
				usePopupNav: true,
				windowMargin: (skel.breakpoint('small').active ? 0 : 50)
			});

		});
		</script>
	</body>
</html>